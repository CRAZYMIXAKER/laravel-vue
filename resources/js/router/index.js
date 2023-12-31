import { createRouter, createWebHistory } from 'vue-router';
import MainLayout from '@/Views/Layouts/Main';
import SidebarDefault from '@/Views/Menu/Default';
import Home from '@/Pages/Home';
import RecipesIndex from '@/Pages/Recipes/Index';
import Login from '@/Pages/Auth/Login';
import Register from '@/Pages/Auth/Register';
import ForgotPassword from '@/Pages/Auth/ForgotPassword';

const isAuth = (to, from, next) => {
    if (window.Laravel.user === null) {
        next();
    }

    next('');
};

const checkRole = (allowedRoles = ['user', 'admin', 'super-admin', 'premium', 'vip']) => (to, from, next) => {
    const user = window.Laravel.user;

    console.log(user);

    if (user === null) {
        console.log('U NULL');
        next('login');
    }

    if (allowedRoles.includes(user)) {
        console.log('U NOT NULL');
        next();
    } else {
        next('/access-denied');
    }
};

const routes = [
    {
        path: '/',
        component: MainLayout,
        children: [
            {
                path: 'login',
                name: 'login',
                components: {
                    default: Login,
                    menu: SidebarDefault,
                },
                beforeEnter: isAuth,
            },
            {
                path: 'register',
                name: 'register',
                components: {
                    default: Register,
                    menu: SidebarDefault,
                },
                beforeEnter: isAuth,
            },
            {
                path: 'forgot-password/',
                name: 'password.request',
                components: {
                    default: ForgotPassword,
                    menu: SidebarDefault,
                },
                beforeEnter: isAuth,
            },
            {
                path: '',
                name: 'home',
                components: {
                    default: Home,
                    menu: SidebarDefault,
                },
            },
            {
                path: 'recipes',
                name: 'recipes.index',
                components: {
                    default: RecipesIndex,
                    right_menu: SidebarDefault,
                },
                beforeEnter: checkRole(),
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(), routes,
});

export default router;

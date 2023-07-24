import { createRouter, createWebHistory } from 'vue-router';
import RecipesIndex from '@/Pages/Recipes/Index';
import Home from '@/Pages/Home';

const routes = [
    // {
    //     path: '/',
    //     name: 'login',
    //     component: LoginView,
    // },
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/recipes',
        name: 'recipes.index',
        component: RecipesIndex,
    },
    // {
    //     path: '/',
    //     component: ExampleView,
    //     children: [
    //         {
    //             path: 'example',
    //             name: 'example',
    //             components: {
    //                 default: ExampleView,
    //                 menu: ExampleView,
    //             },
    //         },
    //         {
    //             path: 'example/:exampleId(\\d+)',
    //             name: 'example',
    //             components: {
    //                 default: ExampleView,
    //                 menu: ExampleView,
    //             },
    //             props: true,
    //         },
    //         {
    //             path: 'example/:exampleId(\\d+)/example_something/:example_something_id(\\d+)/edit',
    //             name: 'example.example_something.edit',
    //             components: {
    //                 default: ExampleView,
    //                 menu: ExampleView,
    //             },
    //             props: true,
    //         },
    //     ],
    // },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;

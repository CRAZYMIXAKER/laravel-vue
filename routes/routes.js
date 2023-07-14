import { createRouter, createWebHistory } from 'vue-router';
// import Main from '@/pages/Main';
// import Books from '@/pages/Book/List';
// import Book from '@/pages/Book/Item';
// import BookEdit from '@/pages/Book/Edit';
// import BookCreate from '@/pages/Book/Create';

const routes = [
    {
        path: '/',
        component: Main,
    },
    {
        path: '/books',
        component: Books,
    },
    {
        path: '/books/create',
        component: BookCreate,
    },
    {
        path: '/books/:id',
        component: Book,
    },
    {
        path: '/books/edit/:id',
        component: BookEdit,
    },
];

const router = createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL),
});

export default router;

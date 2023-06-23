import { createWebHistory, createRouter} from "vue-router";

const routes = [
    {
        path: '/people', component: () => { return import('./components/Person/Index.vue')},
        name: 'person.index',
    },
    {
    path: '/people/create', component: () => { return import('./components/Person/Create.vue')},
    name: 'person.create',
},
    {
        path: '/people/:id/edit', component: () => { return import('./components/Person/Edit.vue')},
        name: 'person.edit',
    },
    {
        path: '/people/:id', component: () => { return import('./components/Person/Show.vue')},
        name: 'person.show',
    },
]
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router;

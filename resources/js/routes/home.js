import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import LoginView from "../views/dashboard/LoginView.vue";
import MainView from "../views/dashboard/MainView.vue";
import AddProjectView from "../views/dashboard/AddProjectView.vue";
import AddPropertyView from "../views/dashboard/AddPropertyView.vue";
import ListProjectsView from "../views/dashboard/ListProjectsView.vue";
import EditProjectView from "../views/dashboard/EditProjectView.vue";
import Test from "../views/dashboard/Test.vue";
import Buy from "../components/front/Buy.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: HomeView,
    },
    {
        path: "/Buy",
        name: "buy",
        component: Buy,
    },
    {
        path: "/login",
        name: "login",
        component: LoginView,
    },
    {
        path: "/main",
        name: "main",
        component: MainView,
    },
    {
        path: "/add-project",
        name: "addProject",
        component: AddProjectView,
    },
    {
        path: "/list-projects",
        name: "ListProjects",
        component: ListProjectsView,
    },
    {
        path: "/add-projects",
        name: "AddProperties",
        component: AddPropertyView,
    },
    {
        path: "/add-projects/:id",
        name: "EditProject",
        component: EditProjectView,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;

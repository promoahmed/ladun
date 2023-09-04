import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("../pages/Home.vue"),
        name: 'Home',
        meta:{title:"Home"}
    },
    {
        path: "/companies",
        component: () => import("@/pages/Companies.vue"),
        name: 'Companies',
        meta:{title:"Companies"}
    },
    {
        path: "/join-us",
        component: () => import("@/pages/JoinUs.vue"),
        name: 'Join Us',
        meta:{title:"Join Us"}
    },
    {
        path: "/search/:q/:local",
        component: () => import("@/pages/search.vue"),
        name: 'search',
        meta:{title:"search"}
    },
    {
        path: "/contact-us",
        component: () => import("@/pages/ContactUs.vue"),
        name: 'Contact Us',
        meta:{title:"Contact Us"}
    },

    {
        path: "/media-center",
        component: () => import("@/pages/MediaCenter.vue"),
        name: 'Media Center',
        meta:{title:"Media Center"}
    },
    {
        path: "/about",
        component: () => import("@/pages/AboutPage.vue"),
        name: 'About Us',
        meta:{title:"About Us"}
    },
    {
        path: "/investors-relations-contact",
        component: () => import("@/pages/contactWithInvestorsRelations.vue"),
        name: 'Contact With Investors Relations',
        meta:{title:"Contact With Investors Relations"}
    },
    {
        path: "/investors-ads",
        component: () => import("@/pages/InvestorsAds.vue"),
        name: 'Investors Ads',
        meta:{title:"investors Ads"}
    },
    {
        path: "/investors-ads/:id",
        component: () => import("@/pages/InvestorRelation.vue"),
        name: 'Investors Relation',
        meta:{title:"Investors Relation"}
    },

    {
        path: "/financials",
        component: () => import("@/pages/FinancialData.vue"),
        name: 'Financial',
        meta:{title:"financial"}
    },
    {
        path: "/projects",
        component: () => import("@/pages/Projects.vue"),
        name: 'Projects',
        meta:{title:"Projects"},
    },
    {
        path: "/projects/:id",
        component: () => import("@/pages/Project.vue"),
        name: 'Project',
        meta:{title:"Project"}
    },
    {
        path: "/media-center/:id",
        component: () => import("@/pages/MediaCenterDetails.vue"),
        name: 'Media Center Details',
        meta:{title:"Media Center Details"}
    },
    {
        path: "/projects-new",
        component: () => import("@/pages/ProjectsNew.vue"),
        name: 'Projects New',
        meta:{title:"Projects New"},
    },
    {
        path: "/latest-new",
        component: () => import("@/pages/Latest.vue"),
        name: 'Latest New',
        meta:{title:"Latest New"},
    },
    {
        path: "/highboard",
        component: () => import("@/pages/highboard.vue"),
        name: 'highboard',
        meta:{title:"High Board"},
    },
    {
        path: "/units/:id",
        component: () => import("@/pages/unities.vue"),
        name: 'units',
        meta:{title:"units"},
    },
    {
        path: "/phases/:id",
        component: () => import("@/pages/Phase.vue"),
        name: 'Phase',
        meta:{title:"Phase"},
    },
    {
        path: "/upload",
        component: () => import("@/pages/UploadExcel.vue"),
        name: 'upload',
        meta:{title:"uploads"},
    },
    {
        path: "/pages/:slug",
        component: () => import("@/pages/Page.vue"),
        name: 'Page',
        beforeEnter: (to, from, next) => {
            document.title = to.params.slug
            return next()
        }
    },


];
const router = createRouter({
    history: createWebHistory(),
    routes,
});
router.beforeEach((to, from, next) => {
    const title = to.meta.title
    if (title) {
        document.title = title
    }
    next()
})

export default router

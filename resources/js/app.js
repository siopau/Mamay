/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

//global registration
import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
Vue.use(VueFormWizard)

//local registration
import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
//component code
components: {
  FormWizard,
  TabContent
}


let routes = [
    { path: '/dashboard', component: require('./components/admin/Dashboard.vue').default },
    { path: '/view-reports', component: require('./components/admin/ViewReports.vue').default },
    { path: '/view-users', component: require('./components/admin/ViewUsers.vue').default },    
    { path: '/manage-roles', component: require('./components/admin/ManageRoles.vue').default },
    { path: '/manage-events', component: require('./components/admin/ManageEvents.vue').default },
    { path: '/manage-articles', component: require('./components/admin/ManageArticles.vue').default },
    { path: '/manage-logistics', component: require('./components/admin/ManageLogistics.vue').default },
    { path: '/manage-transactions', component: require('./components/admin/ManageTransactions.vue').default},
    { path: '/view-transactions', component: require('./components/admin/ViewTransactions.vue').default },
    { path: '/edit-price-range', component: require('./components/admin/EditPriceRange.vue').default },
    { path: '/manage-interview-form', component: require('./components/admin/ManageInterviewForm.vue').default },
    { path: '/manage-milkbanks', component: require('./components/admin/ManageMilkBanks.vue').default },
    { path: '/manage-users', component: require('./components/admin/ManageUsers.vue').default },

    //Milkbank Staff Routes
    { path: '/donor-registration', component: require('./components/milkbank-staff/DonorRegistration.vue').default },
    { path: '/milkbank-dashboard', component: require('./components/milkbank-staff/MilkbankDashboard.vue').default },
    { path: '/received-transported-milk', component: require('./components/milkbank-staff/ReceivedTransportedMilk.vue').default },
    { path: '/manage-prepasteurization', component: require('./components/milkbank-staff/ManageMilkPrePasteurization.vue').default },
    { path: '/manage-pasteurization-post-processing', component: require('./components/milkbank-staff/ManagePasteurizationAndPostProcessing.vue').default },
    { path: '/manage-stored-milk', component: require('./components/milkbank-staff/ManageStoredMilk.vue').default },
    { path: '/manage-milkbatches', component: require('./components/milkbank-staff/ManageMilkBatches.vue').default },
    { path: '/recipient-selection', component: require('./components/milkbank-staff/RecipientSelection.vue').default },
    { path: '/manage-milkbank-documents', component: require('./components/milkbank-staff/ManageMilkBankDocuments.vue').default },
    { path: '/donor-records', component: require('./components/milkbank-staff/DonorRecords.vue').default },
    { path: '/recipient-records', component: require('./components/milkbank-staff/RecipientRecords.vue').default },
    { path: '/donor-profile', component: require('./components/milkbank-staff/DonorProfile.vue').default },

    { path: '/cart', component: require('./components/ecommerce/Cart.vue').default },

    
  ]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

//Import du framework vuejs
import Vue from "vue";
//Import du composant assets/components/App.vue
import App from "./components/App";

//Insatnce de vue framework + rendu alias + Nom du composant et crocheter sur id="app" de la vue twig produit.html.twig
new Vue({
    render: (p) =>p(App)
}).$mount("#app")

//pour compiler webpack npm run watch
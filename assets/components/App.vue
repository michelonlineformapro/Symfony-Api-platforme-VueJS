<template>

  <div>
    <h2>LES PRODUITS</h2>
    <ul>
      <li v-for="produit in produits" v-bind:key="produit.id">
        <p>Titre du produit : {{ produit.title }}</p>
        <p>
          <img v-bind:src="produit.image">
        </p>

        <p>{{produit.description}}</p>
        <p>Prix : {{produit.price}} €</p>

        <p>{{produit.date}}</p>
      </li>
    </ul>
  </div>
</template>


<script>
import axios from 'axios';

export default {
  name: "App",
  data(){
    return{
      produits: []
    }
  },

  methods:{
    getProduits(){
      //Requète HTTP + axios methode get + url de la vue twig
      axios.get('http://localhost:8000/api/produits')
      .then(response => {
        //Type de donnée json api platforme
        this.produits = response.data['hydra:member']
        console.log((response.data['hydra:member']))
      })
      .catch(err => {
        console.log("Erreur de requète http" + err);
      })
    }
  },

  //Cycle de vie
  mounted() {
    this.getProduits();
  }
}

</script>


<style>

</style>
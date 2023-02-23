<script>
import axios from 'axios';

export default {
  data() {
    return {
      movies: [],
      genre: [],
      tags: [],
    }
  },
  mounted() {
    axios.get('http://localhost:8000/api/v1/test')
      .then(res => {
        const data = res.data;
        const success = res.success;
        const response = data.response;
        const genres = response.genre;

        this.movies = response.movies;
        this.genres = genres;



        console.log(this.movies)
      })
      .catch(err => console.error(err));
  },
}
</script>

<template>
  <div v-for="movie in movies" :key="movie.id">
    {{ movie.name }}
  </div>
</template>

<style scoped></style>

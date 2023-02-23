<script>
import axios from 'axios';

export default {
  mounted() {
    axios.get('http://localhost:8000/api/v1/test')
      .then(res => {
        const data = res.data;
        const success = res.success;
        const movies = data.response;

        console.log(movies)
      })
      .catch(err => console.error(err));
  }
}
</script>

<template>
  <h1> Hello World DA VUEE DAJE</h1>
</template>

<style scoped>
header {
  line-height: 1.5;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }
}
</style>

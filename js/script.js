const App = new Vue(
  {
    el: '#app',
    data: {
      cards: []
    },
    created() {
      axios
      .get('http://localhost/php-ajax-dischi/index-json.php/server/controller.php')
      .then((result) => {
          console.log(result);
          this.cards = result.data.results;
      })
      .catch((error) => { console.log(error); });
    }
  }
);
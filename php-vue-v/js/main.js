const app = new Vue({
  el: "#app",
  data: {
    albums: [],
    genres: [],
    loading: false,
    query: "",
    value: "all",
  },
  created() {
    this.search();
  },
  methods: {
    search() {
      const APIurl = `${window.location.href}scripts/search.php`;

      // const APIurl = "http://192.168.1.102/database.php"; test su altro sever

      axios
        .get(APIurl, {
          params: {
            query: this.searchCriteria(),
          },
        })

        .then((result) => {
          this.albums = result.data;

          setTimeout(() => {
            this.loading = true;
          }, 2000);

          result.data.forEach((disc) => {
            if (!this.genres.includes(disc.genre)) {
              this.genres.push(disc.genre);
            }
          });
        })

        .catch((err) => {
          console.log(err);
        });
    },
    select() {
      this.search();
    },
    searchCriteria() {
      if (this.value == "all") {
        return this.query.toLowerCase();
      } else if (this.query != "") {
        this.value = "all";
      } else {
        return this.value.toLowerCase();
      }
    },
  },
});

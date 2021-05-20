const app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  created() {
    const APIurl = `${window.location.href}database.php`;

    axios
      .get(APIurl)

      .then((result) => {
        this.albums = result.data;
      })

      .catch((err) => {
        console.log(err);
      });
  },
});

const app = new Vue({
    el:"#app",
    data:{
        disks: null,
    },
    created(){
    this.getData();
    },
    methods:{
        getData() {
        axios
        .get("http://localhost/php-ajax-dischi/ex-ajax/partials/scripts/database.php")
        .then(response => {
            this.disks = response.data;
        })
        .catch(err =>{
            console.log(err);
        });
    },
  },
});
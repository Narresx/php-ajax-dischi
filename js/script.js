console.log('Vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        disks: [],
    },

    mounted() {
        axios.get('http://localhost/php-ajax-dischi/data/database.php').then(res => {
            this.disks = res.data;
        })
    },
})
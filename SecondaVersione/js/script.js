Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        discs:[]
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/api/discs').then(res => {
            this.discs = res.data
        })
    },
})
/**
 * Created by eason on 2016/12/24.
 */

new Vue({
    el:'#member',
    data:{
        messages : [],
        query : ''
    },
    methods: {
     search: function () {
          this.error = '';
          this.messages = [];

          this.$http.get('team/create/search?q='+this.query).then((response)=>{
              response.body.error ? this.error = response.body.error : this.messages = response.body;
          });

        }
    }
})

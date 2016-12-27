/**
 * Created by eason on 2016/12/27.
 */

var name = new Vue({
    el:'#member',
    data:{
        checked:[],
        messages : [],
        query : '',
        loading:false
    },
    methods: {
        search: function () {
            this.error = '';
            this.messages = [];
            this.loading=true;
            this.$http.get('/team/create/search?q=' + this.query).then((response)=>{
                response.body.error ? this.error = response.body.error : this.messages = response.body;
            });
            this.loading=false;
        },
        select:function (name){
            this.query=name;
            },
        inArray: function() {
            for(var i=0;i<this.messages.data.length;i++){
                if(this.messages.data[i].name==this.query)
                    return true;
            }
            return false;
        },
        check: function(){
            if(!this.checked.includes(this.query)&&this.inArray()) {
                this.checked.push(this.query);
            }
            this.messages=[];
            this.query='';
            }
    },
    watch:{
        query:function () {
            this.search();
        }
    }
});

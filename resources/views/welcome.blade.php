<!DOCTYPE html>
<html>
  <head>
    <title>laravel</title>
  </head>
  <body>
    <div id="vue_body">
      <h1>new users</h1>
      <ul>
        <li v-for="user in users">
          @{{ user }}
        </li>
      </ul>
      <pre>
        @{{ $data }}
      </pre>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.6/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>
      <script>
      var socket = io('localhost:3000');
      new Vue({
        el:'#vue_body',

        data:{
          users:[]
        },
         mounted:function(){
          socket.on('test-channel:event1',function(data){
          this.users.push(data.name);
        }.bind(this));
      }
  });
      </script>
  </body>
</html>

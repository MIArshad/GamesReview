var app = new Vue({
  el: '#app',
  data: {
    comments:[
      {}
    ],
  },
    created(){
      this.getComments();
    },
    methods:{
      generateHeading:function(){
        this.heading = 'Toit Nups';
      },
      getComments:function()
      {
        $.get("http://localhost:8081/gamesreview/index.php/getComments", function(data){
          console.log(data);
          app.comments.push(...data);
        });
      },
      postComment:function()
      {
        $.post("http://localhost:8081/gamesreview/index.php/postComment", postData)
        .done(function(data)
      {
        console.log(data);
        app.comments.push(...postData);
      })
      }
    }
});

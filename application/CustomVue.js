var app = new Vue({
<<<<<<< HEAD
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
=======
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
>>>>>>> 5c7e735768ee9f373c94cb67fe4990240de1ed76
});

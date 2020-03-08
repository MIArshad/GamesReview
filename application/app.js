Vue.component('comment', {
  template: '<div class="comment">' +
    '<h2>{{commentdata.name}}</h2>' +
    '<p>{{commentdata.text}}</p>' +
    '<hr/>' +
  '</div>',
  props: ['commentdata']
});

Vue.component('commentsList', {
  template: '<div> class="commentsList"<comment v-for="commentdata in comments" v-bind:commentdata="commentdata"><comment></div>',
  props: ['comments']
});


Vue.component('commentForm', {
  template: '<form v-on:submit.prevent="postComment">'+
  '<p><label for="text">comment</label><textarea name="enteredcomment" id="enteredcomment" v-model="enteredcomment" placeholder="Enter your comment here..."></textarea></p>'+
  '<p><label for="submit"</label><button name="submit" id-"submit" class="btn btn-primary">Submit</button></p>'+
'</form>',
  data: function(){
     return {
    text ''
  };
},
methods: {
  postComment: function()
  {
    var comment ={'enteredcomment': this.enteredcomment};
  }
}
  
})

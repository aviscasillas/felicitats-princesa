function Home() {
  var me = this;

  this.initialize = function(){
    me.page = 0;
    me.show();
  }

  this.next = function() {
    me.page ++;
    me.show();
  }

  this.show = function() {
    $.ajax({
      type: "GET",
      url: "templates/" + me.page + ".html",
      success: function(data) {
        alert(data);
        $('content').html(data);
      }
    });
  }

  this.initialize();
}

function Home() {
  var me = this;

  this.initialize = function(){
    me.page = 0;
    me.show();
  };

  this.avpage = function() {
    me.page ++;
    me.show();
  };

  this.show = function() {
    $.ajax({
      type: 'GET',
      url: 'templates/' + me.page + '.html',
      success: function(data) {
        $('#content').html(data);
        setAction();
      }
    });
  };

  var setAction = function() {
    $('[name="response"]').on('click', checkAction);
  };

  var checkAction = function() {
    var ok_val = $('[name="ok_val"]').val();
    var checked_val = $(this).attr('value');
    if(ok_val == checked_val) {
      me.avpage();
    } else {
      me.initialize();
    }
  };

  this.initialize();
}


// News module

modules.home = function(){

  var list = function(args){
    $(args.selector).html(args.html);
  }

  $('#login').click(function(){
    document.location.hash="auth.login/" + $('#user').val() + '/' + $('#pass').val();
  });

  return {
    list: list
  }
}
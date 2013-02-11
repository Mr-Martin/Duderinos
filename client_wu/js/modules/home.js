
// News module

modules.home = function(){

  var list = function(args){
    $(args.selector).html(args.html);
  }

  return {
    list: list
  }
}

$('#loginForm').live('submit', function(e){
	e.preventDefault();

  $.ajax({
    type: 'POST',
    url: settings.basePath + 'auth.login',
    data: $(this).serialize(),
    success: function(data){ 
    		user(data);
    }
  });
});


var user = function(args){
	var args = args['auth.login'];
  if(args && args.fullname){
    $('#header').append(args.fullname + ' is the logged in user');
    $('#login').val('Logout');
  }else{
    $('#header').html('Wrong username/password! Please try again!');
  }
}
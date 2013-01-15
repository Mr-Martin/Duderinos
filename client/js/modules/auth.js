
// Auth module

modules.auth = function(){

  var login = function(args){
    $('#header').html(args.firstname + ' ' + args.lastname + ' logged in');
    console.log(args);
  }
  var user = function(args){
    if(args && args.firstname && args.lastname){
      $('#header').html(args.firstname + ' ' + args.lastname + ' is the logged in user');
    }else{
      $('#header').html('no user');
    }
    console.log(args);
  }
  var logout = function(){
    $('#header').html('user logged out');
  }
  return {
    login: login,
    user: user,
    logout: logout
  }
}

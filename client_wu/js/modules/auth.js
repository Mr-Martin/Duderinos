
// Auth module

modules.auth = function(){

  var login = function(args){
    $('#header').html(args.fullname + ' logged in');
  }
  var user = function(args){
    if(args && args.fullname){
      $('#header').html(args.fullname + ' is the logged in user');
    }else{
      $('#header').html('no user');
    }
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

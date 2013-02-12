
// Auth module

modules.auth = function(){

  var user = function(args){
    if(args && args.fullname){
      $('#userinfo').html(args.fullname + ' is the logged in user');
    }else{
      $('#userinfo').html('no user');
    }
  }
  var logout = function(){
    $('#userinfo').html('user logged out');
  }

  return {
    login: login,
    user: user,
    logout: logout
  }
}

$('#loginForm').live('submit', function(e){
  e.preventDefault();
    $.ajax({
    type: 'POST',
    url: settings.basePath + 'auth.login',
    data: $(this).serialize(),
    success: function(data){ 
      loginUser(data);
    }
  });
});

$('#logoutForm').live('click', function(e){
  e.preventDefault();
    $.ajax({
    type: 'POST',
    url: settings.basePath + 'auth.logout',
    data: $(this).serialize(),
    success: function(data){
      logoutUser(data);
    }
  });
});


var loginUser = function(args){
  var args = args['auth.login'];
  if(args && args.fullname){
    $('#userinfo').html(args.fullname + ' logged in!');

    $('#loginForm > input').hide();
    $('#loginForm > p').hide();
    $('#login').show();

    $('#login').val('Logout');
    $('#loginForm').attr('id', 'logoutForm');
  }else{
    alert('Wrong username/password!' + "\n" + 'Please try again!');
  }
}

var logoutUser = function(args){
  var args = args['auth.logout'];
  $('#login').val('Login').removeClass('logout');

  $('#username').val('');
  $('#password').val('');

  $('#logoutForm > input').show();
  $('#logoutForm > p').show();
  $('#userinfo').html('');
}
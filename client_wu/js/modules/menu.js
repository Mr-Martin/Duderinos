
// menu module

modules.menu = function(){

  var get = function(args){
    $('.menu').html(args.html);
  }

  return {
    get: get
  }
}
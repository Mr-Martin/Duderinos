
// cartbasket module

modules.cart = function(){

  var get = function(args){
    $('#cartbasket').html(args.html);
  }

  return {
    list: list
  }
}
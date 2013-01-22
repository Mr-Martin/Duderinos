
// Product module

modules.product = function(){

  var list = function(args){
    $(args.selector).html(args.html);
    callMenu();
  }

  var callMenu = function(){
  	getResponse(null, "product.menu");
  }

  var menu = function(args){
    $(args.selector).html(args.html);
  }

  return {
    list: list,
    menu: menu
  }
}
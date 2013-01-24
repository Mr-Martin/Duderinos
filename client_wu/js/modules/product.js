
// Product module

modules.product = function(){

  var list = function(args){
    callChrome(function(){
      $(args.selector).html(args.html);
    });
    callMenu(); 
  }

  var callMenu = function(){
    getResponse(null, "product.menu");
  }

  var menu = function(args){
    callChrome(function(){
      $(args.selector).html(args.html);
    });
  }

  var page = function(args){
    $(args.selector).html(args.html);
  }

  var callChrome = function(callback){
    if($("#right").length < 1){
      getResponse(null, "product.page", callback);
    }else{
      callback();
    }
  }

  return {
    list: list,
    menu: menu,
    page: page
  }
}
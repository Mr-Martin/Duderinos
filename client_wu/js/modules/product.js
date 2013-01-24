
// Product module

modules.product = function(){
  var page = function(args){
    $(args.selector).html(args.html);
  }

  var callList = function(){
    getResponse(null, "product.list");
  }

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

  var callChrome = function(callback){
    if($("#right").length < 1){
      getResponse(null, "product.page", callback);
    }else{
      callback();
    }
  }

  var info = function(args){
    $(args.selector).html(args.html);
    callInfo();
  }

  var callInfo = function(){
    getResponse(null, "product.info");
  }

  return {
    list: list,
    menu: menu,
    page: page,
    info: info
  }
}
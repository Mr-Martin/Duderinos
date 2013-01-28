
// Product module

modules.product = function(){
  var page = function(args){
    $(args.selector).html(args.html);
  }

  var info = function(args){
    callChrome(function(){
      $(args.selector).html(args.html);
    });
    callMenu(); 
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

  $(".more-info-btn").live("click", function(){
    document.location.hash="info";// + $(this).attr("data-id");
  });

  return {
    list: list,
    info: info,
    menu: menu,
    page: page
    
  }
}
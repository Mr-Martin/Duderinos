
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

  var prodText;

  $(".prodInfo").each(function(){
    prodText = $(this).text();
    var str = prodText.substr(0,270);

    $(this).html(str + '...');
  });

  $('.prodBox').fadeIn();

  return {
    list: list,
    info: info,
    menu: menu,
    page: page
    
  }
}

$(".menuitem").live("click", function(){
  document.location.hash="product.list/" + $(this).attr("data-id");
});

$(".more-info-btn").live("click", function(){
  document.location.hash="product.info/" + $(this).attr("data-id");
});

$(".back-btn").live("click", function(){
  document.location.hash="product.list";
});
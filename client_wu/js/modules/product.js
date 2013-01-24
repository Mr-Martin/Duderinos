
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
  var callInfo = function(){
  	getResponse(null, "product.info");
  }
  var info = function(args){
  	$(args.selector).html(args.html);
  	callInfo();
  }
 $(".more-info-btn").live("click", function(){
  	document.location.hash="product/info/" + $(this).attr("data-id");
  });
  return {
    list: list,
    menu: menu,
    info: info
  }
}
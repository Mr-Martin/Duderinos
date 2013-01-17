
// Product module

modules.product = function(){

  var list = function(args){
    $(args.selector).html(args.html);
  }

  return {
    list: list
  }
}
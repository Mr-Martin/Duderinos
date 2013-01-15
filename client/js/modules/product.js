
// Product module

modules.product = function(){

  var show = function(args){
    console.log(args);
    $('#productList').html(args.html);
    //applyResponseToDom(arguments);
  }

  var list = function(args){
    console.log(args);
    applyResponseToDom(arguments);
  }

  return {
    show: show,
    list: list
  }
}

// Chrome module

modules.chrome = function(){

  var inital = function(args){
    $('body').html(args.html);
  }

  return {
    inital: inital
  }
}
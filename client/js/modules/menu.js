
// menu module

modules.menu = function(){

  var get = function(args){
    console.log('modules.menu.get args', args);
    if(args.name == 'top'){
      $('#topMenu').replaceWith(args.html);
    }else if(args.name == 'side'){
      $('#sideMenu').replaceWith(args.html);
    }
  }

  return {
    get: get
  }
}

// Base module

modules.base = function(){

  var applyResponseToDom = function(r){
    for(var i in r){
      if(r[i].selector && r[i].html){
        $(r[i].selector).html(r[i].html);
      }
    }
  }

  return {
    applyResponseToDom: applyResponseToDom
  }
}

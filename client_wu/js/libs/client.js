
// EVENT - hash driven content loader, listen to hashchange
$(window).bind('hashchange', getResponse);

// define empty object to hold our modules
modules = {};

/**
 * [Module Factory function. From server response namespace, it finds and loads the requested module]
 * @param {[string]} path [namespace to module.method]
 * @param {[type]} args [arguments to module.method, like module.method(args)]
 */
function Module(path, args){
  var errors = [];
  var mCall = path.split('.');
  var mName = mCall.shift();
  mCall = mCall.join('.');
  if(window['modules'] && window['modules'][mName]){
    var m = new window['modules'][mName]();
    if(m[mCall]){
      // if a module is found, we return it here.
      return m[mCall](args);
    }else{
      errors.push('The module ' + mName + ' does not contain a public method ' + mCall);
    }
  }else{
    errors.push('No module ' + mName + ' was found');
  }
  // if no module is found, we return the object below (i e for debugging)
  return {
    error:errors,
    path:path,
    args:args
  }
}

function getResponse(e, nonHashRequest, callback){

  var applyResponse = function(r){
    var m = {};
    for(var i in r){
      if(!m.i){
        m[i] = new Module(i,r[i]);
        console.log(i,'arguments:',r[i]);
      }
    }
  }

  var getUrl = function(){
    if(nonHashRequest){
      return settings.basePath + nonHashRequest;
    }
    return settings.basePath + getHash();
  }

  var jqxhr = $.ajax({ 
      format : 'json',
      type : "GET",
      crossDomain : false,
      url : getUrl()
    })
    .done(function(r) {
      applyResponse(r);
      callback();
    })
    .fail(function() { 
      alert("error"); 
    })
    .always(function() { 
      //alert("complete"); 
    });
}

function getHash(){

  var mapHash = function(hash){
    if(settings.hashMap[hash]){
      return settings.hashMap[hash];
    }
    return hash;
  }

  var findAndSelectLinks = function(hash){
    $('a').removeClass('menuitem_sel');
    $('a[href=#' + hash + ']').addClass('menuitem_sel');
  }

  var hash = decodeURIComponent(document.location.hash.replace('#',''));
  findAndSelectLinks(hash);
  return mapHash(hash);
}

function applyResponseToDom(r){
  for(var i in r){
    if(r[i].selector && r[i].html){
      $(r[i].selector).html(r[i].html);
    }
  }
}


// init (code is first run, and this part only once)
var initialHash = getHash();
if(initialHash){
  settings.initalRequests.push(initialHash);
}

// make initial requests
for(var i = 0; i< settings.initalRequests.length; i++){
  getResponse(null, settings.initalRequests[i]);
}

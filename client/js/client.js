
// hash driven content loader, listen to hashchange
$(window).bind('hashchange', getResponse);

// set base path
var basePath = '/gitHub/Duderinos/server/';

// define empty object to hold our modules
modules = {};

function Module(path, args){
  // if module + call matching path exists, return it
  // else return this generic Module (with reported errors)
  var errors = [];
  var mCall = path.split('.');
  var mName = mCall.shift();
  mCall = mCall.join('.');
  if(window['modules'] && window['modules'][mName]){
    var m = new window['modules'][mName]();
    if(m[mCall]){
      return m[mCall](args);
    }else{
      errors.push('The module ' + mName + ' does not contain a public method ' + mCall);
    }
  }else{
    errors.push('No module ' + mName + ' was found');
  }
  return {
    error:errors,
    path:path,
    args:args
  }
}

function getResponse(e, nonHashRequest){

  var applyResponse = function(r){
    var m = {};
    for(var i in r){
      if(!m.i){
        m[i] = new Module(i,r[i]);
      }
    }
  }

  var getHash = function(){
    return decodeURIComponent(document.location.hash.replace('#',''));
  }

  var getUrl = function(){
    console.log(nonHashRequest);
    if(nonHashRequest){
      return basePath + nonHashRequest;
    }
    return basePath + getHash();
  }

  var jqxhr = $.ajax({ 
      format : 'json',
      type : "GET",
      crossDomain : false,
      url : getUrl()
    })
    .done(function(r) { 
      applyResponse(r);
    })
    .fail(function() { 
      alert("error"); 
    })
    .always(function() { 
      //alert("complete"); 
    });
}

function applyResponseToDom(r){
  console.log('response',r);
  for(var i in r){
    if(r[i].selector && r[i].html){
      $(r[i].selector).html(r[i].html);
    }
  }
}

// init (code is first run, and this part only once)
// list of initial requests to make
//var initalRequests = ['chrome.inital','menu.get/top','menu.get/side'];

// do them:
for(var i = 0; i< initalRequests.length; i++){
  getResponse(null, initalRequests[i]);
}

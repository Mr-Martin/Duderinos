// SETTINGS
settings = {

  // path to server
  basePath: '/Skola_objectphp/Gruppuppgift2_Duderinos/Duderinos/server_wu/',

  // what do we want to get when we first load?
  initalRequests: ['chrome.inital','menu.get','home.list'],

  // mapped hashes (so we can have nicer/simpler hash names than our system names)
  hashMap: {
    'home': 'home.list',
    'product': 'product.list',
    'profile': 'profile.list'
  }
};
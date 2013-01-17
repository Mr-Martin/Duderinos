
// Profile module

modules.profile = function(){

  var form = function(args){
    console.log(args);
    $(args.selector).html(args.html);
  }

  // bind form submission
  $('#profile').live('submit', function(e){
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: settings.basePath + 'profile.submit',
      data: $(this).serialize(),
      success: function(data)
      {
        console.log('result data', data);
      }
    });
  });

  return {
    form: form
  }
}
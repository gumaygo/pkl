(function(){
  
  var pwd = $('#password');
  var pwd2 = $('#passwordRepeat');
  var validation = $('#validationErrors');
  var progress = $('#passwordProgress');
  
  var checks = [
    {
      msg: "At least 6 characters.",
      regex: /^.{6,99}$/
    },
    {
      msg: "At least 1 lowercase character.",
      regex: /[a-z]/
    },
    {
      msg: "At least 1 uppercase character.",
      regex: /[A-Z]/
    },
    {
      msg: "At least 1 number.",
      regex:  /\d/
    },
    {
      msg: "At least 1 special character (!?/&@.,).",
      regex: /(_|[^\w\d ])/
    }
  ];
  
  function validatePwd(){
    var errors = [];
    var p = pwd.val();
    
    validation.html("");
    for(var i = 0; i < checks.length; i++){
      if(!p.match(checks[i].regex)){
        errors.push(checks[i].msg);
        validation.append('<li class="validation-rule">'+checks[i].msg+'</div>');
      }
    }
    
    progress.css('width', (checks.length - errors.length) * (100 / checks.length) + '%' );
    
    if(errors.length > 0){
      markError(pwd);
      markClear(pwd2);
      return;
    }
    markSuccess(pwd);
    
    if(pwd2.val().length == 0){
      markClear(pwd2);
    }else if(pwd.val() === pwd2.val()){
      markSuccess(pwd2);
    }else{
      markError(pwd2);
    }
  }
  
  function markError(el){
    markClear(el);
    el.parent().addClass('has-error');
  }
  function markSuccess(el){
    markClear(el);
    el.parent().addClass('has-success');
  }
  function markClear(el){
    el.parent().removeClass('has-success');
    el.parent().removeClass('has-error');
  }
  
  pwd.on('keyup change',validatePwd);
  pwd2.on('keyup change',validatePwd);

})();
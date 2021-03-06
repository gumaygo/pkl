function validatePassword(password) {
  let specialVars = '$@#&!'
  let passwordStrength = 0;
      
    //Regex to be checked for.
    let regex1 = /[a-z]+/;
    let regex2 = /[A-Z]+/;
    let regex3 = /[0-9]+/;
    let regex4 = /[$@#&!]+/;

    if (regex1.test(password)){
        passwordStrength += 25;
      togglePasswordStrength(passwordStrength);
    }
    if (regex2.test(password)){
        passwordStrength += 25;
      togglePasswordStrength(passwordStrength);
    }
    if (regex3.test(password)){
        passwordStrength += 25;
      togglePasswordStrength(passwordStrength);
    }
    if (regex4.test(password)){
        passwordStrength += 25;
      togglePasswordStrength(passwordStrength);
    }
  if (password.length < 6 
        || password.length > 12){
        PasswordStrengthInfo('Password can not be less than 6 or greater than 12 characters', ".err-msg");
    }
    
    if(passwordStrength === 0 
       || (password.length >= 6
       && password.length <=12)){
      togglePasswordStrength(passwordStrength);
      PasswordStrengthInfo("", ".err-msg");
    }
  // typechecking and space checking.
  if (typeof password !== 'string' 
        || password.includes(' ')){
        PasswordStrengthInfo(`Please input a string without spaces in between and the preferred special characters are ${specialVars}`,  ".err-msg");
    }   
}

//Abstracting document.querySelector into a function for reuse.
function getEl(name){
  return document.querySelector(name);
}

//Checks the various classes and unhides the ncesessary one where possible.
function togglePasswordStrength(passwordStrength) {

    if (passwordStrength === 25){      
      if(getEl(".red").classList.contains('hide')){
        getEl(".red").classList.remove('hide');
      }
      if(!getEl(".orange").classList.contains('hide')){
        getEl(".orange").classList.add('hide');
      }
      if(!getEl(".blue").classList.contains('hide')){
        getEl(".blue").classList.add('hide');
      }
      if(!getEl(".green").classList.contains('hide')){
        getEl(".green").classList.add('hide');
      }
      PasswordStrengthInfo("25%");
    }
   else if (passwordStrength === 50){      
      if(getEl(".orange").classList.contains('hide')){
        getEl(".orange").classList.remove('hide');
      }
      if(!getEl(".red").classList.contains('hide')){
        getEl(".red").classList.add('hide');
      }
      if(!getEl(".blue").classList.contains('hide')){
        getEl(".blue").classList.add('hide');
      }
      if(!getEl(".green").classList.contains('hide')){
        getEl(".green").classList.add('hide');
      }
      PasswordStrengthInfo("50%");
    }
     else if (passwordStrength === 75){      
      if(getEl(".blue").classList.contains('hide')){
        getEl(".blue").classList.remove('hide');
      }
      if(!getEl(".red").classList.contains('hide')){
        getEl(".red").classList.add('hide');
      }
      if(!getEl(".orange").classList.contains('hide')){
        getEl(".orange").classList.add('hide');
      }
      if(!getEl(".green").classList.contains('hide')){
        getEl(".green").classList.add('hide');
      }
      PasswordStrengthInfo("75%");
    }
    
    else if (passwordStrength === 100){      
      if(getEl(".green").classList.contains('hide')){
        getEl(".green").classList.remove('hide');
      }
      if(!getEl(".red").classList.contains('hide')){
        getEl(".red").classList.add('hide');
      }
      if(!getEl(".orange").classList.contains('hide')){
        getEl(".orange").classList.add('hide');
      }
      if(!getEl(".blue").classList.contains('hide')){
        getEl(".blue").classList.add('hide');
      }
      PasswordStrengthInfo("100%");
      
    }
    else {
      if(!getEl(".green").classList.contains('hide')){
        getEl(".green").classList.add('hide');
      }
      if(!getEl(".red").classList.contains('hide')){
        getEl(".red").classList.add('hide');
      }
      if(!getEl(".orange").classList.contains('hide')){
        getEl(".orange").classList.add('hide');
      }
      if(!getEl(".blue").classList.contains('hide')){
        getEl(".blue").classList.add('hide');
      }
      PasswordStrengthInfo("0%");
    }
}

//Prints to the screen 0% or corresponding password strength and info depending on user input.
function PasswordStrengthInfo(msg, ele=null){
  if(ele)
    document.querySelector(ele).innerHTML = msg;
  else
    document.querySelector(".perc").innerHTML = msg;
}

//Grabbing the input value and triggering the function with the event listener.
document.getElementById("input-val")
.addEventListener("keyup", (e) => {
  validatePassword(e.target.value);
})
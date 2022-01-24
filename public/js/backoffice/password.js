
function validatePassword(){
    const str = document.getElementById('password').value;
    const number = document.getElementById("number-in-password"); 
    const upper = document.getElementById("uppercase-in-password"); 
    const lower = document.getElementById("lowercase-in-password"); 
    const size = document.getElementById("size-in-password"); 

    if (str.match( /[0-9]/g)){
        number.classList.add('valid');
    }else{
        number.classList.remove('valid');
    }
    if (str.match( /[A-Z]/g)){
        upper.classList.add('valid');
    }else{
        upper.classList.remove('valid');
    }        
    if (str.match(/[a-z]/g)){
        lower.classList.add('valid');
    }else{
        lower.classList.remove('valid');
    }
    if ( str.length >= 10){
        size.classList.add('valid');
    }else{
        size.classList.remove('valid');
    }    
    if (str.match(/[a-z]/g) && str.match( /[0-9]/g) && str.match( /[A-Z]/g) && str.length >= 10){
        document.getElementById("password-input").classList.add('validate-input');
    }else{
        document.getElementById("password-input").classList.remove('validate-input');
    }

}

function comparePassword(){
    var password = document.getElementById('password').value;
    var reviewPassword = document.getElementById('verifPassword').value;

    const number = document.getElementById("number-in-password"); 
    const upper = document.getElementById("uppercase-in-password"); 
    const lower = document.getElementById("lowercase-in-password"); 
    const size = document.getElementById("size-in-password"); 

    if (password == reviewPassword){
        document.getElementById("password-review-input").classList.add('validate-input');
        document.getElementById("password-review-input").classList.remove('no-validate-input');

    }else{
        document.getElementById("password-review-input").classList.remove('validate-input');
        document.getElementById("password-review-input").classList.add('no-validate-input');
    }

    if(password == reviewPassword && number.classList.contains("valid")== true && upper.classList.contains("valid")== true && lower.classList.contains("valid") == true && size.classList.contains("valid")== true){
        document.getElementById('validation-form').disabled =false; 
    }
}
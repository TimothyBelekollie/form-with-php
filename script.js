$fNameError=document.getElementById('fName-error');
$lNameError=document.getElementById('lName-error');
$emailError=document.getElementById('email-error');
$passwordError=document.getElementById('password-error');
$dateError=document.getElementById('date-error');
$genderError=document.getElementById('gender-error');
$countryError=document.getElementById('country-error');
$districtError=document.getElementById('district-error');


$subError=document.getElementById('submit-error');



function validatefName(){
    var fName=document.getElementById('fName').value;
    if(fName.length==0){
        $fNameError.innerHTML="first Name is require"
        return false;

    }
    if(!fName.match(/^[a-z ,.'-]+$/i)){
        $fNameError.innerHTML="First Names must be valid"; 
        return false;
    }
    $fNameError.innerHTML="valid";
    return true;
}
//lName
function validatelName(){
    var lName=document.getElementById('lName').value;
    if(lName.length==0){
        $lNameError.innerHTML="Last Name is require"
        return false;

    }
    if(!lName.match(/^[a-z ,.'-]+$/i)){
        $lNameError.innerHTML="Last Name must be valid"; 
        return false;
    }
    $lNameError.innerHTML="valid";
    return true;
}

//email
function validateEmail(){
    var email=document.getElementById('email').value;
    if(email.length==0){
        $emailError.innerHTML="Email is require";
        return false;

    }
    if(!email.match(/[^\s]*@[a-z0-9.-]*/i)){
        $emailError.innerHTML="Invalid Email"; 
        return false;
    }
    $emailError.innerHTML="valid";
    return true;
}
//password
function validatePassword(){
    var password=document.getElementById('password').value;
    if(password.length==0){
        $passwordError.innerHTML="Password can not be null";
        return false;

    }
    if(!password.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$")){
        $passwordError.innerHTML="Invalid"; 
        return false;
    }
    $passwordError.innerHTML="valid";
    return true;
}

//dob

function validateDob(){
    var dob=document.getElementById('dob').value;
    if(dob.length==0){
        $dateError.innerHTML="Date can not be null";
        return false;

    }
    if(!dob.match("^(0[1-9]|1[012])[-/.](0[1-9]|[12][0-9]|3[01])[-/.](19|20)\\d\\d$")){
        $dateError.innerHTML="Invalid"; 
        return false;
    }
    $dateError.innerHTML="valid";
    return true;
}

//submit

function validateForm(){
    if(!validatefName()||!validatelName()||!validateEmail()||!validatePassword()||!validateDob()){
        $subError.style.display='block';
        $subError.innerHTML="Please fix the error to submit";

       setTimeout(function(){$subError.style.display='none';},3000);

        return false;
    }

    
}

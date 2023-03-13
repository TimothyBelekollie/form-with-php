<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class work</title>

    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h1>INFO SESSION WITH OBJECTIVITY</h1>
    <hr>
    <p>
        OJEVTIVITY IS PARTNERING WITH UNILAK TO HIRE THE GRADUATES FROM THE 
        CAMPUS OF KIGALI PLEASE FILL THIS FORM FOR YYOU TO BE CONSIDERED
    </p>
<form action="insert.php" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>
            Form
        </legend>
   
    <fieldset>
        <legend>Personal Information</legend>
        <div>
            <label for="">First Name</label><br>
            <input type="text" name="fName" value="" id="fName" onkeyup="validatefName()"  width="100px"><br>
            <span id="fName-error"></span>
        </div><br>
       
        <div>
            <label for="">Last Name</label><br>
            <input type="text" name="lName" value="" id="lName" onkeyup="validatelName()"><br>
            <span id="lName-error"></span>
        </div>
        <br>
        <div>
          
            <input type="email" name="email" id="email" onkeyup="validateEmail()" value="" placeholder="example@gmail.com" ><br>
            <span id="email-error"></span>
        </div>
        <br>
        <div>
          
            <input type="password" name="passwords" value="" placeholder="*************"  id="password" onkeyup="validatePassword()"><br>
            <span id="password-error"></span>
        </div>
        <br>
        <div>
          
            <input type="date" name="dob" value=""  id="dob" onkeyup="validateDob()"><br>
            <span id="date-error"></span>
        </div>
        <br>
       
        
        <div>
            <p>YOUR GENDER</p>
          
            <input type="radio" name="gender" value="Male"  ><label for="gender">Male</label>
            <input type="radio" name="gender" value="Female"  ><label for="gender">Female</label>
<br>
            <span id="gender-error"></span>

        </div>
        <br>
       
    </fieldset>
    
    <fieldset>
        <legend>Personal Address</legend>
        <label for="">Country</label><br>
        <input list="Country" name="country">
        <datalist id="Country">
            <option value="Liberia">
            <option value="Rwanda">
            <option value="Ghana">
            <option value="South Africa">
            <option value="Kenya">

        </datalist> <br>
        <span id="country-error"></span>
   <br>
        
        <label for="">District</label><br>
        
        <select name="district" id="">

                <option value="Kicukiro" selected>Kicukiro</option>
                <option value="Nyanza">Nyanza</option>
                <option value="Gasabo">Gasabo</option> <br>
                <span id="district-error"></span>
        </select>
    </fieldset>

   
    
    <fieldset>
       
<legend>QUALIFICATION AND EXPERIENCE</legend>
<LABel>PLEASE SELECT MAXIMUM THREE LANGUAGES</LABel>
<br>

        <select name="languages[]" id="" multiple size="6">
            <option name="languages[]" value="Java">Java</option>
            <option name="languages[]" value="PHP">PHP</option>
            <option name="languages[]" value="PYthon">PYthon</option>
            <option name="languages[]" value="Ruby">Ruby</option>
            <option name="languages[]" value="HTML">HTML</option>
            <option name="languages[]" value="Javascript">Javascript</option>
            <option name="languages[]" value="Javascript">Javascript</option>
            <option name="languages[]" value="Javascript">Javascript</option> <br>
            <span id="language-error"></span>

          
            <br>

<span id="languages-error"></span>
        </select>
        <br>

        <label for="">Upload your CV</label><br>
        <input type="file" name="image"> 
        <br>

        <span id="district-error"></span>
 <br>
        <label for="">Educatioin</label><br>
        
        <select name="education" id="">

               <option value="Kicukiro" selected>High school</option>
                <option value="Nyanza">college</option>
                <option value="Gasabo">Masters</option>
        </select>
        <br>

<span id="education-error"></span>
<br>
<label for="">Which was your graduation Date</label><br>
<input type="month" name="dateofgraduate" id="">
<br>

<span id="month-error"></span>
<br>
<label for="">Which languages you want to master in the future</label>
<br>
<input type="checkbox" name="furetureLan[]" id="" value="Java">Java <br>
<input type="checkbox" name="futureLan[]" id="" value="Python">Python <br>
<input type="checkbox" name="futureLan[]" id="" value="Ruby">Ruby <br>

<input type="checkbox" name="furetureLan[]" value="C++" id="">C++<br>
<span id="month-error"></span>
    </fieldset>
    <fieldset>
        <legend>Contact Us</legend>
        <textarea name="contact" id=""  cols="30" rows="10" id="contact" onkeyup="validateContact()">

        </textarea>
        <br>
        <span id="contact-error"></span>
    </fieldset>
    <br>
    <button name="submit" onclick="return validateForm()">Submit</button>
    <br>
    <span id="submit-error"></span>
</fieldset>

</form>
 

<script src="script.js"></script>
</body>
</html>
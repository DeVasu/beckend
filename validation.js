function checkform(form)
{
    var re;
    document.write("afjal0");
    if(form.firstname.value==""){
        alert("Error: Name cannot be blank");
        form.firstname.focus();
        return false;
    }

    re = /[0-9]+/;
    if(!re.test(form.rollno.value)){
        alert("Error: Roll no should be a numerical value only!");
        form.rollno.focus();
        return false;
    }

    re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if(!re.test(form.email.value)){
        alert("Error: Email Address is Wrong!");
        form.email.focus();
        return false;
    }

    
        
    if(form.password.value != "" && form.password.value == form.password2.value) {
        if(form.password.value.length < 8) {
            alert("Error: Password must contain at least 8 characters!");
            form.password.focus();
            return false;
        }
        re = /[0-9]/;
        if(!re.test(form.password.value)) {
            alert("Error: password must contain at least one number (0-9)!");
            form.password.focus();
            return false;
        }
        re = /[a-z]/;
        if(!re.test(form.pwd1.value)) {
            alert("Error: password must contain at least one lowercase letter (a-z)!");
            form.password.focus();
            return false;
        }
        re = /[A-Z]/;
        if(!re.test(form.pwd1.value)) {
            alert("Error: password must contain at least one uppercase letter (A-Z)!");
            form.password.focus();
                return false;
        }
    }
    else {
        alert("Error: Please check that you've entered and confirmed your password!");
        form.password.focus();
        return false;
    }
                    
    alert("You entered a valid password: " + form.password.value);
    return true;
}
            
             

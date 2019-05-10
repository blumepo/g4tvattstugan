
function check(){
    if(document.form1.Name.value == "" || document.form1.Mail.value == "" || document.form1.Username.value == "" || document.form1.Password.value == ""){
        alert("You need to fill out all the forms");
        return false;
    }else if (!document.form1.Mail.value.includes(".") || !document.form1.Mail.value.includes("@") ) {
        alert("You need an actual e-mail adress to proceed");
        return false;
    }else if (document.form1.Password.value !=document.form1.Password2.value) {
        alert("The passwords doesn't match");
        return false;
    }else{
        document.form1.submit();
    }

}

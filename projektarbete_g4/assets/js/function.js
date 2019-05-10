
function check(){
    if(document.form1.Name.value == "" || document.form1.Mail.value == "" || document.form1.Username.value == "" || document.form1.Password.value == ""){
        alert("You need to fill out all the forms");
        return false;
    }else if (!document.form1.Mail.value.includes(".") || !document.form1.Mail.value.includes("@") ) {
        alert("You need an actual e-male adress to proceed");
        return false;
    }else{
        document.form1.submit();
    }

}

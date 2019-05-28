function checkUser() {
    if (document.form_to_login.Mail.value.trim() == "" || document.form_to_login.Password.value.trim() == "") {
        alert("Du behöver fylla i alla fält för att registerar dig");
        return false;
    } else if (!document.form_to_login.Mail.value.includes(".") || !document.form_to_login.Mail.value.includes("@")) {
        alert("Du behöver fylla i en giltig e-postadress för att logga in");
        return false;
    } else if (document.form_login.Password.value.trim().length == 0) {
        alert("Du behöver fylla i ett lösenord");
        return false;
    } else {
        document.form_to_login.submit();
    }
}

function CheckComment() {
 if (document.form1.Kommentar.value.trim().length == 0) {
    alert("Du behöver skriva en kommentar");
    return false;
} else {
    document.form1.submit();
}
}

function CheckReg() {
    if (document.form_reg.Name.value.trim() == "" || document.form_reg.Mail.value.trim() == "" || document.form_reg.Password.value.trim() == "") {
        alert("Du behöver fylla i alla fält för att registerar dig");
        return false;
    } else if (!document.form_reg.Mail.value.includes(".") || !document.form_reg.Mail.value.includes("@")) {
        alert("Du behöver fylla i en giltig e-postadress för att registerar dig");
        return false;
    } else {
        document.form_reg.submit();
    }
}

function RemoveComment()
{
    
}


function LogOut() {
    session_start();
    $_SESSION=array();
    session_destroy();
    header("Location:index.php");
}

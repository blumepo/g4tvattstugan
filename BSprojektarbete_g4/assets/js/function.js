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

function checkComment()
{
    var valid=true;
                if(document.form1.Namn.value.trim().length == 0)
                { 
                    alert("Fyll i ditt namn");
                    valid=false;
                }
                if(document.form1.Epost.value=="")
                {
                    alert("Fyll i din epostadress");
                    valid= false;
                }
                else if(document.form1.Epost.value.indexOf("@") == -1)
                {
                    alert("Ogiltig epost");
                    valid= false;
                }
                else if(document.form1.Epost.value.indexOf("@") != -1)
                {
                    var check=false;
                    for(i= (document.form1.Epost.value.indexOf("@"))+1; i<document.form1.Epost.value.length-1; i++)
                    {
                            if (document.form1.Epost.value[i]==".")
                            {
                                check=true;
                            }
                            
                            if (check==false)
                            {
                                alert("Ogiltig epost");
                                valid=false;
                            }
                    }
                }
                if(document.form1.Kommentar.value.trim().length ==0)
                {
                    alert("Skriv ditt inlägg");
                    valid= false;
                }
                return valid;
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



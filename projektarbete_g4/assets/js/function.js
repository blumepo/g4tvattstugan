function checkUser()
{
    if(document.form1.Name.value == "" || document.form1.Mail.value == "" || document.form1.Username.value == "" || document.form1.Password.value == "")
    {
        alert("You need to fill out all the forms");
        return false;
    }
    else if (!document.form1.Mail.value.includes(".") || !document.form1.Mail.value.includes("@") ) 
    {
        alert("You need an actual e-mail adress to proceed");
        return false;
    }
    else if (document.form1.Password.value !=document.form1.Password2.value) 
    {
        alert("The passwords doesn't match");
        return false;
    }
    else
    {
        document.form1.submit();
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

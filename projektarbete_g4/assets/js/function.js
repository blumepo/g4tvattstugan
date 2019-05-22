function checkUser()
{
    var valid=true;
    if(document.form_login.Mail.value.trim().length == 0)
    {
        alert("Fyll i epostadress");
        valid=false;
    }
    else if(document.form_login.Mail.value.indexOf("@") == -1)
    {
        alert("Ogiltig epost");
        valid=false;
    }
    else if(document.form_login.Mail.value.indexOf("@") != -1)
    {
        var check=false;
        for(i= (document.form_login.Mail.value.indexOf("@"))+1; i<document.form_login.Mail.value.length-1; i++)
        {
            if (document.form_login.Mail.value[i]==".")
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
    if(document.form_login.Password.value.trim().length == 0)
    {
        alert("Fyll i ett lösenord");
        valid=false;
    }
    return valid;
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

function CheckReg()
{
    var valid=true;
    if(document.form_reg.Mail.value.trim().length == 0)
    {
        alert("Fyll i epostadress");
        valid=false;
    }
    else if(document.form_reg.Mail.value.indexOf("@") == -1)
    {
        alert("Ogiltig epost");
        valid=false;
    }
    else if(document.form_reg.Mail.value.indexOf("@") != -1)
    {
        var check=false;
        for(i= (document.form_reg.Mail.value.indexOf("@"))+1; i<document.form_reg.Mail.value.length-1; i++)
        {
            if (document.form_reg.Mail.value[i]==".")
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
    if(document.form_reg.Name.value.trim().length == 0)
    {
        alert("Fyll i ditt namn");
        valid=false;
    }
    if(document.form_reg.Username.value.trim().length == 0)
    {
        alert("Fyll i ett användarnamn");
        valid=false;
    }
    if(document.form_reg.Password.value.trim().length == 0 || document.form_reg.Password2.value.trim().length == 0)
    {
        alert("Fyll i ett lösenord");
        valid=false;
    }
    if (document.form_reg.Password.value !=document.form_login.Password2.value) 
    {
        alert("Lösenorden matchar inte");
        valid=false;
    }
    return valid;
}

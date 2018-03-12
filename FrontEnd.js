function FormCondition()
{
    var sName = document.forms['BookForm']['Name'].value;
    var sEmail = document.forms['BookForm']['Email'].value;
    var sPhone = document.forms['BookForm']['Phone'].value;
    var nDate = document.forms['BookForm']['Date'].value;
    var nDays = document.forms['BookForm']['Days'].value;

    if(sName === null || sName === "")
    {
        alert("Please input your name.");
        return false;
    }

    if(nDate === null || nDate ==="")
    {
        alert("Please input the date.");
        return false;
    }

    if (sEmail === null || sEmail === "") 
    {
        alert("Please input your email.");
        return false;
    }

    if(isNaN(sPhone))
    {
        alert("Please input only numbers.");
        return false;
    }
    else if (sPhone === "")
    {
        alert("Please input your phone number.");
        return false;
    }

    if(isNaN(nDays))
    {
        alert("Please input only numbers.");
        return false;
    }
    else if (nDays === "")
    {
        alert("Please input the number of days of stay.");
        return false;
    }

    return true;
}
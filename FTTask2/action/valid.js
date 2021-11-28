function valid() 
{
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    var lag = document.getElementById("age").value;
    var desig = document.getElementById("designation").value;
    var ck1 = document.getElementById("JAVA").value;
    var ck2 = document.getElementById("PHP").value;
    var ck3 = document.getElementById("CPP").value;
    var em = document.getElementById("email").value;
    var pas = document.getElementById("password").value;


    if (fname == "" || lname == "" || lag== "" ||desig=="" || em == "" || pas=="") 
    {
    document.getElementById("message").innerHTML="Please Enter Blank value";
    return false;
    }

    if(ck1==""&& ck2=="" && ck3=="")
    {
    document.getElementById("messagenew").innerHTML="Please Select the Language Preference";
    return false;
    }

    return true;

}
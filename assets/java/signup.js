function formValidationv ()
{
    var fname = document.registration.fname;
    var mname = document.registration.mname;
    var lname = document.registration.lname;
    var uid = document.registration.uname;
    var pwd = document.registration.pwd;
    var birthday = document.registration.birthday;
    var uid = document.registration.gender;
    var country = document.registration.country;
    var uemail = document.registration.email;
    var phone = document.registration.phone;
    var uadd = document.registration.address;
    if(uname_validation(uid,5,12))
    {
    if(passid_validation(passid,7,12))
    {
    if(allLetter(fname))
    {
    if(allLetter(mname))
    {
    if(allLetter(lname))
    {
    if(validsex(umsex,ufsex,uother))
    {
    if(countryselect(ucountry))
    {
    if(ValidateEmail(uemail))
    {
    if(allnumeric(phone))
    {
    }    
    }
    }
    }   
    }
    }
    }
    }
    }
    return false;

    } function userid_validation(uid,mx,my)
    {
    var uid_len = uid.value.length;
    if (uid_len == 0 || uid_len >= my || uid_len < mx)
    {
    alert("User Id should not be empty / length be between "+mx+" to "+my);
    uid.focus();
    return false;
    }
    return true;
    }
    function passid_validation(passid,mx,my)
    {
    var passid_len = passid.value.length;
    if (passid_len == 0 ||passid_len >= my || passid_len < mx)
    {
    alert("Password should not be empty / length be between "+mx+" to "+my);
    passid.focus();
    return false;
}
return true;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function countryselect(ucountry)
{
if(ucountry.value == "Default")
{
alert('Select your country from the list');
ucountry.focus();
return false;
}
else
{
return true;
}
}
function allnumeric(phone)
var numbers = /^[0-9]+$/;
if(phone.value.match(numbers))
{
return true;
}
else
{
alert('PHONE code must have numeric characters only');
phone.focus();
return false;
}
}
function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
} function validsex(umsex,ufsex,other)
{
x=0;

if(umsex.checked) 
{
x++;
} if(ufsex.checked)
{
x++; 
if(other.checked) 
{
x++;
}
if(x==0)
{
alert('Select Male/Female/Other');
umsex.focus();
return false;
}
else
{
alert('Form Succesfully Submitted');
window.location.reload()
return true;
}
}
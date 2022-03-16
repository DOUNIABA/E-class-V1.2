 function validation(){

    let name=document.getElementById('nom').value;
    let email=document.getElementById('mail').value;
    let password=document.getElementById('password').value;
    let confirmpass=document.getElementById('confirmpass').value;

    if (name == "") {
        document.getElementById('nomid').innerHTML="**Please fill the field!!**";
        return false;
    }

    if ((name.length <2) ){
        document.getElementById('nomid').innerHTML =" ** user name should contain at least 2 characters!!** ";
        return false;
       }

    if (email == "") {
        document.getElementById('emailid').innerHTML="**Please fill the field!!**";
        return false;
    }

    else if (email.indexOf('@') <= 0) {
        document.getElementById('emailid').innerHTML = " **  @ Invalid Position!!"
        return false;
      }else if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
        document.getElementById('emailid').innerHTML = " ** . Invalid Position!!**"
        return false;
      }

    if (password == "") {
        document.getElementById('passwordid').innerHTML="**Please fill the field!!**";
        return false;
    }

    else if ((password.length <8)) {
        document.getElementById('passwordid').innerHTML =" ** The password must contain at least 8 characters!!** "
        return false;
      }

    if (confirmpass == "") {
        document.getElementById('cofirmid').innerHTML="**Please fill the field!!**";
        return false;
    }
else if (password!= confirmpass) {
    document.getElementById('cofirmid').innerHTML =" ** Password Not Matched!!**"
    return false;
  }


 }
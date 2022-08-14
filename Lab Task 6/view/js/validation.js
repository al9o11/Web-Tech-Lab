function validation(){
  let name = document.signup.name;
  let uname = document.signup.uname;
  let email = document.signup.email;
  let nid = document.signup.nid;
  let pass = document.signup.pass;
  let repass = document.signup.repass;

  if(name==null || name==""){
    alert("Name can't be blank");
    return false;
  }
  else if (pass.length<8){
    alert("Password must be at least 8 characters long.");
    return false;
  }
  else if(uname==null || uname==""){
    alert("Username can't be blank");
    return false;
  }
  else if(email==null || email==""){
    alert("email can't be blank");
    return false;
  }
  else if(nid==null || nid==""){
    alert("Please enter NID");
    return false;
  }
  else if(repass==null || repass==""){
    alert("Please retype password");
    return false;
  }
}
function checkName(){
  let regname = /^[a-zA-Z]+( [a-zA-Z]+)+$/;
  if(!regname.test(document.getElementById("nm").value)){
    document.getElementById("nameerr").innerHTML = "Name can only have characters";
  }
  else{
    document.getElementById("nameerr").innerHTML ="";
  }
}

function checkuname() { 
  if(document.getElementById("unm")==null || document.getElementById("unm")==""){
    document.getElementById("unameerr").innerHTML = "Username can't be empty";
  }
  else{
    document.getElementById("unameerr").innerHTML = "";
  }
}

function checkpass(){
  if(document.getElementById("ps").value<8){
    document.getElementById('passerr').innerHTML = "Password needs to be at least 8 characters long ";
  }
  else{
    document.getElementById('passerr').innerHTML = "";
  }
}

function checknid(){
  if(isNaN(document.getElementById("ni").value)){
    document.getElementById(niderr).innerHTML = "NID must be a numeric value";
  }
  else{
    document.getElementById(niderr).innerHTML = "";
  }

}

function checkrepass(){
  let pcheck = document.getElementById("ps").value;
  if(!pcheck===document.getElementById("rps").value){
    document.getElementById("repasserr").innerHTML = "Password doesn't match";
  }
  document.getElementById("repasserr").innerHTML ="";
}

function checkemail() {
  let regemail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regemail.test(document.getElementById("em").value)){
    document.getElementById("emailerr").innerHTML = "Please provide a correct email";
  }
  else{
    document.getElementById("emailerr").innerHTML ="";
  }
}
function validation(){
  let uname = document.signin.uname;
  let pass = document.signin.pass;

  if(uname==null || uname==""){
    alert("Username can't be blank");
    return false;
  }
  else if (pass.length<8){
    alert("Password must be at least 8 characters long.");
    return false;
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
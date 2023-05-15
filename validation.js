
  function validate(){
    flag=1
  var name = document.forms["myform"]["name"].value;
  if(name.length==0){

  alert("Please enter the name");
  }
  var email = document.forms["myform"]["email"].value;
  if(email.length==0){
    
  alert("Please enter the email");
  
  }
  var pass = document.forms["myform"]["password"].value;
  var confirm = document.forms["myform"]["cpassword"].value;
  if(pass!==confirm){

  alert("password not matched!");
   
  }
  }
   

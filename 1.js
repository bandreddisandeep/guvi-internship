function sign(){
	var username = document.getElementById('username').value;
	var rollno = document.getElementById('rollno').value;
	var dept = document.getElementById('dept').value;
	var year = document.getElementById('year').value;
	var password = document.getElementById('password').value;
	var data = "username="+username+"&rollno="+rollno+"&dept="+dept+"&year="+year+"&password="+password;

	  var ajx = new XMLHttpRequest();
               ajx.onreadystatechange = function () {
               if (ajx.readyState == 4 && ajx.status == 200) {
                   alert(ajx.responseText);  
                   if (ajx.responseText == 'success')  
                   {
                   	window.location = "login.php";
                   }   
                   else{
                   	window.location = "signup.html";
                   }     

                      }
            };
               
            ajx.open('POST', 'signup.php');
            ajx.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            ajx.send(data);
        

}


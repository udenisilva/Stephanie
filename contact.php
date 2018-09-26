<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontakt</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="Styles/common.css"/>
<link rel="stylesheet" type="text/css" href="Styles/contact.css"/>
<script type="text/javascript">
      // Form validation code
      function validate()
      {
      	var name=document.myForm.vname.value;
		var email=document.myForm.vemail.value;
		var subject=document.myForm.vsubject.value;
		var msg=document.myForm.vmsg.value;
         if( name =="" ||  email =="" || subject =="" || msg =="")
         {
            alert( "Please fill all fields" );
            return false;
         }
         if(!validateEmail(email)){
			alert("Please enter correct email address")
            document.myForm.vemail.focus() ;
			return false;
		 }
         
         return true;
      }
	  function validateEmail(emailID)
      {
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {          
            return false;
         }
         return true;
      }
</script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span> </button>
      <a class="navbar-brand" rel="home" href="index.html"> <img src="Images/logo.png" alt="Stephanie Mangliers"> </a> </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="books.html">Bücher</a></li>
        <li><a href="portrait.html">Portrait</a></li>
        <li><a href="appointment.html">Termine</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="fa fa-facebook fa-1x"></span></a></li>
        <li><a href="#"><span class="fa fa-twitter fa-1x"></span>
          </h6>
          </a></li>
        <li ><a href="#"><small class="fa fa-instagram fa-1x"></small></a></li>
        <li class="active"><a href="contact.php"><span>Kontakt</span></a></li>
      </ul>
    </div>
  </div>
  <img src="Images/header.jpg"/> 
</nav>
<!--Logo-->
<div class="logoimg"> <img src="Images/logo.png" class="img-responsive"> </div>  
<!-- Contact form-->
<div class="container contactform">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-3">
      <h3>Kontakt</h3>
    </div>
  </div>
  <br/>
  <div class="row" >
    <div class="col-sm-offset-4 col-sm-5 ">
        <h6><?php include "emailme.php"?></h6>
      <form class="form-horizontal" name="myForm" onsubmit="return validate()" action="#" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name"><small>NAME</small></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="vname"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2 " for="email"><small>EMAIL</small></label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="vemail"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="subject"><small>BETREFF</small></label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="subject" name="vsubject"/>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="msg"><small>NACHRICHT</small></label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="5" id="msg" name="vmsg"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-9 text-right" >
            <button type="submit" class="btn btn-default" name="submit">Abschicken</button>
          </div>
        </div>
      </form>
      
    </div>
  </div>
</div>
<footer class="img-responsive">
  <p><a href="imprint-policy.html">Impressum</a> | <a href="data-protection.html">Datenschutz</a></p>
</footer>
</body>
</html>
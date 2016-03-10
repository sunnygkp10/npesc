<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NPESC || REGISTRATION</title>
<link rel="shortcut icon" href="image/logo1.png">
 <link  rel="stylesheet" href="css/bootstrap.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 
 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 <script src="js/jquery.min.js" type="text/javascript"></script> 
 <script src="js/bootstrap.js" type="text/javascript"></script>

</head>

<body>
<!--body statt-->
<div class="container">
<div class="row">
<!--form start-->
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="panel panel-primary">
 <div class="panel-heading title1">Registration</div>
 
  <div class="panel-body title2">
<form class="form-horizontal" style="font:20px 'Ubuntu', sans-serif;" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desi"></label>  
  <div class="col-md-12">
  <input id="desi" name="desi" placeholder="Enter Designation" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="college"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter Name & Address of Institute/Organization" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="address"></label>  
  <div class="col-md-12">
  <input id="address" name="address" placeholder="Enter Address for Communication" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Mobile no input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="mobile"></label>
  <div class="col-md-12">
    <input id="mobile" name="mobile" placeholder="Enter Mobile no" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="accom"></label>
  <div class="col-md-12">
    <select id="accom" name="accom" placeholder="choose Accommodation" class="form-control input-md" >
   <option value="NO">choose Accommodation</option>
  <option value="NO">NO</option>
  <option value="YES">YES</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="payment"></label>
  <div class="col-md-12">
    <select id="payment" name="payment" placeholder="Payment" class="form-control input-md" >
   <option value="Internal Faculty">Select Payment Option</option>
  <option value="Yes">Yes</option>
  <option value="Faculty">Internal Faculty</option>
  <option value="VIP">VIP</option> </select>
  </div>
</div>

<!-- Amount input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="amount"></label>
  <div class="col-md-12">
    <input id="amount" name="amount" placeholder="Enter amount" class="form-control input-md" type="number">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input type="submit" style="margin-left:40%;"  value="Register" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div></div>
</div><!--closing of col-md-6-->
</div><!--closing of row-->
</div><!--closing of container-->

</body>
</html>

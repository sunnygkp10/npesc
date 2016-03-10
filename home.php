<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Drishticone | Home Page</title>
 <link rel="shortcut icon" href="image/img/icon.png">
 <link  rel="stylesheet" href="image/css/bootstrap.css"/>
 <link  rel="stylesheet" href="image/css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="image/css/main.css">
 <link  rel="stylesheet" href="image/css/font.css">    
 <script src="image/js/bootstrap.min.js"  type="text/javascript"></script>
 <script src="image/js/jquery.min.js" type="text/javascript"></script> 
 <script src="image/js/bootstrap.js" type="text/javascript"></script> 

    
    <style>
    .jumbotron {
        height: 350px ;
    }
        
    
    </style>
<?php
session_start();
include_once 'dbConnection.php';

$r1 = mysqli_query($con,"SELECT COUNT(registration_id) from poll WHERE answer=1 ") or die(mysql_error());
while($row1 = mysqli_fetch_array($r1)) {
$anscount1=$row1['0'];
} 
$r2 = mysqli_query($con,"SELECT COUNT(registration_id) from poll WHERE answer=2 ") or die(mysql_error());
while($row2 = mysqli_fetch_array($r2)) {
$anscount2=$row2['0'];
}
$r3 = mysqli_query($con,"SELECT COUNT(registration_id) from poll ") or die(mysql_error());
while($row3 = mysqli_fetch_array($r3)) {
$sum=$row3['0'];
} 
if($sum==0){
	$poll1 = 0;
	$poll2 = 0;
}
else{
$poll1 = round(($anscount1/$sum)*100,1);
$poll2 = round(($anscount2/$sum)*100,1);
}
?>
</head>
<body>
<div class="row col-md-12 signin">
<?php
if(!(isset($_SESSION['registration_id']))){

echo '<button class="btn btn-success btn-sm pull-right logbutton" data-toggle="modal" data-target="#myModal">
  Sign In/Register
</button>';
}
else
{
@$_GET['updatemessage'];
$registration_id = $_SESSION['registration_id'];
$query=mysqli_query($con,"SELECT full_name FROM user WHERE registration_id=$registration_id");
	while($row = mysqli_fetch_array($query)) {
	$full_name = $row['0'];
	}
echo '<b><span class="pull-left">Hello,  <a href="user_profile.php">'.$full_name.''.@$_GET['updatemessage'].'</a></span></b><form action="logout.php?q=index.php" method="post">
<input type="submit" class="btn btn-success btn-sm pull-right logbutton" name="logout" value="Log Out"/>
		</form>';
}


?>
</div>




































<!-- Modal sign In/Register -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">Login</a></li>
  <li><a href="#profile" role="tab" data-toggle="tab">Sign Up</a></li>
  </ul>

<div class="tab-content">
<br>
  <div class="tab-pane active" id="home">

<!-- sign in form begins -->  
  <form class="form-horizontal" action="image/login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="registration_id"></label>  
  <div class="col-md-4">
  <input id="registration_id" name="registration_id" placeholder="College Reg. ID" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password"></label>
  <div class="col-md-4">
    <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <input type="submit" id="" name="" value="Sign In" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
  <div class="tab-pane" id="profile">
<!-- sign Up begins -->  
  <form class="form-horizontal" action="image/signup.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="full_name"></label>  
  <div class="col-md-4">
  <input id="full_name" name="full_name" placeholder="Full Name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="registration_id"></label>  
  <div class="col-md-4">
  <input id="registration_id" name="registration_id" placeholder="College Reg. ID" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email"></label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="E-Mail" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password"></label>
  <div class="col-md-4">
    <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm_password"></label>
  <div class="col-md-4">
    <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control input-md" type="password">
    
  </div>
</div>
 <center>  
<div style="width:300px;">
  <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
 </script>
	<?php
          require_once('recaptchalib.php');
          $publickey = "6LcWCvsSAAAAAPgVZCCPFqMae-kT3SeSgyqGGnhB"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>

</div>
</center>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <input type="submit" id="" name="" value="Sign Up" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
  
</div>

<script>
  $(function () {
    $('#myTab a:home').tab('show')
  })
</script>
      </div>
    </div>
  </div>
</div>
</ul>
</div>
</header>
    
<div class="row">
    <div class="col-md-3 height1">
        <div class="well well-sm height1">
          <h2 class="title1"><b>POLL #3</b></h2>
		  <h4 class="title2">Is entry time for girls hostel in winters justified?</h4>
		  <form action="image/poll.php" method="get">
		  <input type="radio" name="poll" value="1"><strong>Yes</strong>
		  <div class="progress">
			<div class="progress-bar progress-bar-success progress-bar-striped active"  role="progressbar" aria-valuenow="<?php echo $poll1 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $poll1 ?>%">
			<?php echo $poll1 ?>%
			</div>
		    </div>
		  <input type="radio" name="poll" value="2"><strong>No</strong>
		  <div class="progress">
			<div class="progress-bar progress-bar-danger progress-bar-striped active"  role="progressbar" aria-valuenow="<?php echo $poll2 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $poll2 ?>%">
			<?php echo $poll2 ?>%
			</div>
		    </div>
		  <?php
		  if(!(isset($_SESSION['registration_id']))){
		  echo '<a href="#" data-toggle="modal" data-target="#myModal">Sign in</a> to Vote<br>';
		  }
		  else{
		  $registration_id = $_SESSION['registration_id'];
		  $reg = mysqli_query($con,"SELECT COUNT(registration_id) from poll WHERE registration_id=$registration_id") or die(mysql_error());
		  while($row = mysqli_fetch_array($reg)) {
			$count=$row['0'];
				} 
		  if($count == 1)
		  {
		  echo '<p class="title2">You Already Voted !!!<p>';
		  }
		  else
		  {
		  echo '<input type="submit" class="btn btn-large btn-primary" value="Vote" /><br>';
		  }
		  }
		  echo '<p id="submit">TOTAL VOTE COUNT: '.$sum.'</p>';
		  ?>
		  </form>
		  
        
          
        </div>
    </div>
    
    
    <div class="col-md-6 height">
    
              <div id="myCarousel" class="carousel slide height" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner height">
        <div class="item active">
          <a href="http://www.effulgence.in"><img class="img-responsive" src="image/img/eff.jpg" alt="Third slide"></a>
          <div class="container">
            <div class="carousel-caption ">
             <!--<h4 class="caption1">BARC Seminar organized at our college</h4>
              <p></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
		<div class="item">
          <a href="http://www.anbti.in"><img class="img-responsive" src="image/img/anbti.png" alt="First slide"></a>
          <div class="container">
            <div class="carousel-caption">
              <!--<h1>ANUNAAD'14</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">View Gallery</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/img/collage.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <!--<h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/img/teacher.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
             <!-- <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
		
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    
    </div>
        
</div>        
    
    <div class="col-md-3">
		<div class="pdf">
        
     <iframe name="Joomag_embed_66f5dc8e-575b-465e-9f71-072b9f632bb3" style="width:260px;height:340px" width="260px" height="340px" hspace="0" vspace="0" frameborder="0"  src="http://www.joomag.com/magazine/drishticone/0984512001419850475?p=1&amp;e=1&amp;embedInfo=;image,%2F%2Fstatic.joomag.com%2Fponch%2Fflash%2Fgui%2Fthemes%2Fdefault%2Fbg.jpg,fill"></iframe>
		</div>
    </div>
    
  </div> 

<div class="row">
    <div class="col-md-3 archive ">
	<h3 class="title1"><b>Latest Articles</b></h3>
	<div class="list-group">
	
	<a href="image/article1.php" class="list-group-item ">Bring it on..</a>
	<a href="image/article2.php" class="list-group-item">Voice Of Soldier</a>
	<a href="image/article3.php" class="list-group-item">Being A Girl</a>
	<a href="image/article4.php" class="list-group-item">Why "Big Data" Is A Big Deal?</a>
	<a href="image/article5.php" class="list-group-item">Q-FRAT-FIESTA</a>
	<a href="image/article6.php" class="list-group-item">The Off-Campus Radiance</a>
	<a href="image/article7.php" class="list-group-item">An 'Idea' Can Change Your Life!</a>
	<a href="image/article8.php" class="list-group-item"> On a Retail High: The Flipkart Story</a>
	<a href="image/article9.php" class="list-group-item">For someone special</a>
	<a href="image/article10.php" class="list-group-item">Lost in crowd</a>
    <a href="image/article11.php" class="list-group-item">D"ICON" OF THE EDITION</a>
    <a href="image/article12.php" class="list-group-item">Fosco beauty of Night</a>
    <a href="image/article13.php" class="list-group-item">Fire in the youth</a>
	</div><hr>
	<h3 class="title1">Advertisements</h3>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3457390582423309"
     data-ad-slot="9975267277"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><hr>
	</div>
	<div class="col-md-6">
	
	<h3 class="title1"><b>Articles</b></h3>
	<div class="panel">
	<div class="panel-heading title1">Fire In The Youth</div>
	<div class="panel-body title2">
    <p>There is an old saying that the age group of 16-25 is very critical and is often called as 'Gadha-Pachisi'. With the teenage being very impressionable, this is not peculiar. Instability is the synonym of youth and mind is the epicentre of all irregularities happening in and around. Aggression is not a new phenomenon among youth and a few recent events in KNIT have raised a dire need to analyse the mental state of KNITians with a strong generalisation of our youth. There are various questions, is aggression very harmful? , is it necessary to retaliate in violent form sometimes? (Obviously we love Bapu), what were the reasons behind some of the most violent protests by KNITians? , how can we control this aggression? etc. Drishticone tries to answer these without being biased.<a href="image/article13.php">Read full article</a>
	  </p>
	
	</div>
	</div>
	<div class="panel">
	<div class="panel-heading title1">The Off-Campus Radiance</div>
	<div class="panel-body title2">
    <p><img src="image/img/Capture2.JPG" style="float:right; padding:4px" />The declining campus placement has been a cause of major concern for KNIT students since last few years (recession and remote location of the college being the prominent reasons).
But there are many opportunities that can be grabbed by students which are generally overlooked due to insufficient knowledge about off-campus and pool-campus placements.
Off-campus and pool-campus placement opens up a gateway for students to a wide range of companies.<a href="image/article6.php">Read full article</a>
</p>
	</div>
	</div>
	</div>
	<div class="col-md-3">
	<h3 class="title1"><b>Voice of KNIT</b></h3>
	<iframe src="vok.html" width="300" height="345"></iframe>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fdrishticoneknit&amp;width=200px&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200pxpx; height:290px;" allowTransparency="true"></iframe>
	
	</div>
    
</div>

<div class="row">
<div class="col-md-12 footer" style="background-image: url(image/bg.png);">
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
	   <center>
	   <a href="#"><h2>Developers</h2></a>
	   <a href="https://www.facebook.com/iprashantk">Prashant Kumar Sharma</a><br>
	   <a href="https://www.facebook.com/12skm">Shwet Kamal Mishra</a><br>
	   <a href="https://www.facebook.com/vipinknit16">Vipin Kumar Srivastava</a><br>
	   <a href="https://www.facebook.com/indian.ankush">Ankush Srivastava</a><br>
	   <a href="https://www.facebook.com/nidhi.singh.3304">Nidhi Singh</a><br>
	   <a href="https://www.facebook.com/sunnygkp10">Sunny Prakash Tiwari</a><br>
	   <a href="https://www.facebook.com/chirag.goel.39948">Chirag Goel</a><br>
	   <a href="https://www.facebook.com/mayank.pathak.96742">Mayank Mendax Pathak</a><br>
	   <a href="https://www.facebook.com/shivani.jaiswal.7549185">Shivani Jaiswal</a><br>
	  
	   </div>
	    </div>
		 </div>
		  </div>
		  	<!-- Modal -->
<div class="modal fade" id="adminlogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="active"><a href="#home" role="tab" data-toggle="tab">Login</a></li>
  </ul>
  <div class="tab-content">
<br>
  <div class="tab-pane active" id="home">
<!-- sign in form begins -->  
  <form class="form-horizontal" action="image/adminlogin.php?q=admin.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="registration_id"></label>  
  <div class="col-md-4">
  <input id="registration_id" name="admin_id" placeholder="Admin User ID" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password"></label>
  <div class="col-md-4">
    <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <input type="submit" id="" name="" value="Sign In" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
</div>

<script>
  $(function () {
    $('#myTab a:home').tab('show')
  })
</script>
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-md-3">
<b><center><a class="footer_text" href="report.php">Feedback<a></center>
</div>
<div class="col-md-3">
<center><a class="footer_text" data-toggle="modal" data-target="#myModal1" href="#">Web Developers<a></center>
</div>
<div class="col-md-3">
<center><a class="footer_text" data-toggle="modal" data-target="#adminlogin" href="#">Admin Panel<a></center>
</div>
<div class="col-md-3">
<center><a class="footer_text" href="report.php">Report a problem<a></center></b>
</div>
</div>
<center><a class="footer_text">Copyright &copy 2014 Drishticone Web Development Team<a></center>
</div>
</div>


</body>
</html>
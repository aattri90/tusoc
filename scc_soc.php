<!DOCTYPE html>
<html lang="en">
<head>
  <title>TU Societies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="my_css_file.css">
  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ab0a5b5b-28cb-43d0-8772-1b897bd3619d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
                 <!--logo-->
                 <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="index.html"><img src="logo.jpg" alt="TUSOC" class="img-responsive img-rounded"></a>
                 </div>
                <!--menu items-->
            <div class="collapse navbar-collapse" id="mainNavBar">
              <ul class="nav navbar-nav ">
                <li><a href="index.html#about">ABOUT</a></li>
                <li class= "active_opt"><a id="yes" href="#myPage">SOCIETIES</a></li>
                <li><a href="index.html#events">EVENTS</a></li>
                <li><a href="index.html#contact">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
				
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                </ul>
                </li>
              </ul>
            </div>
</div>
</nav>
<div class="row bg-grey">
     <div class="col-md-12 col-xs-12" align="right">
     <b><br><br>THAPAR &nbsp;UNIVERSITY &nbsp;SOCIETIES &nbsp;AND &nbsp;EVENTS &nbsp;&nbsp;&nbsp;</b>
     </div>
</div>
<!-- Login Modal -->
<div class="modal fade" id="loginModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!--header-->
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Log-in</h3>
			</div>
			<!--body-->
            <div class="modal-body">
				<form role="form">
                <div class="form-group">
					<input type="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password">
				</div>
				</form>
			</div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Signup Modal -->
<div class="modal fade" id="signupModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!--header-->
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Signup</h3>
			</div>
			<!--body-->
            <div class="modal-body">
				<form role="form">
                <div class="form-group">
					<input type="text" class="form-control" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="E-mail id">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Roll No.">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Re-enter password">
				</div>
				</form>
			</div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container main"><br><br>
    <h1><u>Student Consultative Committee (SCC)</u> :</b></h1>
    <table>
		<tr>
			<td>
				To obtain the students feedback, Thapar University has a Student Consultative Committee<br>
				comprising of ex-officio faculty representatives and over 100 student representatives from<br>
				across the various disciplines.SCC's objective is to assist the administration in preparing<br>
				and implementing students' welfare plans.
			</td>
			<td id="image_col">
				<img style="margin-left:95px;" src="scc.jpg" width="200" height="160" align="right">
			</td>
		</tr>
	</table><br><br><br><br>

</div>

<!-- footer-->
<footer class="footer container-fluid text-center bg-grey">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
 </footer>
<script>

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a#yes, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>
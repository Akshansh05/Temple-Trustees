<?php
include("connect.php");
include("login.php");
 if(isset($_POST['username'])) 
  {    
    
     function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    $userName =test_input($_POST['username']); 
    $email =test_input($_POST['email1']);
    $password = test_input($_POST['psw1']);
    $repeatpassword=test_input($_POST["psw-repeat"]);
    $name1=test_input($_POST["name1"]);
    if (strlen($userName) < 3) {
             echo "<script language=\"JavaScript\">\n";
echo "alert('Username too stort');\n";
echo "window.location='index.php'";
echo "</script>"; 
        }
        
        else if (email_exists($email,$conn)) {
            echo "<script language=\"JavaScript\">\n";
echo "alert('Email already exists');\n";
echo "window.location='index.php'";
echo "</script>";
        }
        elseif (strlen($password)<8) {
             echo "<script language=\"JavaScript\">\n";
echo "alert('Password must be greater than 8 characters');\n";
echo "window.location='index.php'";
echo "</script>";
        }
        elseif ($password!=$repeatpassword) {
              echo "<script language=\"JavaScript\">\n";
echo "alert('Password does not match');\n";
echo "window.location='index.php'";
echo "</script>";
        }
        else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql="INSERT INTO log (userName,email,password,name) VALUES ('$userName','$email','$password','$name1')";
        
    
            if($conn->query($sql) === TRUE){
                 echo "<script language=\"JavaScript\">\n";
echo "alert('Successfully Registered,Please Login to continue');\n";
echo "window.location='index.php'";
echo "</script>";
            }
            
            else {
             echo "<script language=\"JavaScript\">\n";
echo "alert('Registration Error');\n";
echo "window.location='index.php'";
echo "</script>";
            }
      } 
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>TEMPLE TRUSTEES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">TEMPLE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myCarousel">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</a>

</li>
<li><a onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a>
</li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>

    </div>
  </div>
</nav> 
<div id="id01" class="modal">
<form class="modal-content animate" method="POST" action="login.php" id ="loginform">
  <div class="container1">
  <label><b>Email: </b></label><input type="email" placeholder="Enter Email" name="email" required>
 <label><b>Password: </b></label><input type="password" placeholder="Enter Password" name="psw" required>
   <button type="submit"class="login"name="login"id="login1">Login</button>
    <button type="button" class="cancelbtn" onclick="location.href='index.php'">Cancel</button><br>
<label><input type="checkbox" checked="checked" name="keep"> Remember me</label><br>
  </div>
</form>
</div>
<div id="id02" class="modal1">
<form class="modal-content1 animate" method="POST"id="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <div class="container2">    
<label><b>Username: </b></label><input type="text" placeholder="Must be greater than 3 characters" name="username" required>
<label><b>Name: </b></label><input type="text" placeholder="Enter Name" name="name1" required>
<label><b>Email:</b></label><input type="text" placeholder="Enter Email" name="email1" required>
 <label><b>Password: </b></label><input type="password" placeholder="Must be greater than 8 characters" name="psw1" required>
 <label><b>Repeat Password:</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
   <button type="submit"class="signup" id="signup1">Sign up</button>
    <button type="button" class="cancelbtn" onclick="location.href='index.php'">Cancel</button><br>
<label><input type="checkbox" checked="checked" align="left"> Remember me</label><br>
<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  </div>
</form>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="a.jpg" alt="Temple 1">
      <div class="carousel-caption">
        <h3>Temple A</h3>
      </div> 
    </div>

    <div class="item">
      <img src="b.jpg" alt="Temple 2">
      <div class="carousel-caption">
        <h3>Temple B</h3>
      </div> 
    </div>

    <div class="item">
      <img src="c.jpg" alt="Temple 3">
      <div class="carousel-caption">
        <h3>Temple C</h3>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="about" class="container text-center">
  <h2 style="color:red;" class="animated bounceInLeft"><b>The doorstep to the temple of wisdom is a knowledge of our own ignorance.</b></h2>
  <div id="content"  class="jumbotron animated bounceInRight" style="background-color:#E9967A;"><p>The temple is the focus for all aspects of everyday life in the Hindu community - religious, cultural, educational and social. The temple is also the place where one can transcend the world of man.
Hindus believe that their lives are merely stages in the progression to ultimate enlightenment. The temple is a place where God may be approached and where divine knowledge can be discovered. All aspects of the Hindu temple focus on the goal of enlightenment and liberation - the principles of design and construction, the forms of its architecture and decoration, and the rituals performed. And all of these are determined by ancient texts called shastras compiled by the priests, the brahmins. The vastushastras were theoretical and idealised descriptions of the architectural traditions and conventions to be followed.
</p>
<p>The temple is designed to dissolve the boundaries between man and the divine. Not merely his abode, the temple is God. God and therefore by implication the whole universe is identified with the temple design and actual fabric. The ground plan is perhaps the best example. The vastushastras describe it as a symbolic, miniature representation of the cosmos. It is based on a strict grid made up of squares and equilateral triangles which are imbued with deep religious significance. To the Indian priest-architect the square was an absolute and mystical form. The grid, usually of 64 or 81 squares, is in fact a mandala, a model of the cosmos, with each square belonging to a deity. The position of the squares is in accordance with the importance attached to each of the deities, with the square in the center representating the temple deity; the outer squares cover the gods of lower rank.
</p>
<p>The construction of the temple of the temple follows in three dimensional form exactly the pattern laid out by the mandala. The relationship between the underlying symbolic order and the actual physical appearance of the temple can best be understood by seeing it from above which was of course impossible for humans until quite recently
</p>
<p>Another important aspect of the design of the ground plan is that it is intended to lead from the temporal world to the eternal. The principal shrine should face the rising sun and so should have its entrance to the east. Movement towards the sanctuary, along the east-west axis and through a series of increasingly sacred spaces is of great importance and is reflected in the architecture. A typical Hindu temple consists of the following major elements - an entrance, often with a porch; one or more attached or detached mandapas or halls the inner sanctum called the garbagriha, literally womb chamber and the tower build directly above the garbagriha.
</p>
<p>Besides the ground plan there are other important aspects of the temple which connect it to the phenomenal world - its site in relation to shade and water, its vertical elevation relating to the mountains, and the most sacred part, the garbagriha, relating to caves.
</p>
<p>As a god can be malevolent as well as benevolent it is important that the temple site is one that will please him. The Puranas state that The gods always play where groves are near rivers, mountains and springs. Sacred sites in India therefore, are usually associated with water, shade and lakes of India are often considered to be sacred and they have healing and purifying powers. Rivers such as the Ganges are thought to have descended from the heavens, perhaps the Milky Way, and their sacred water is needed in the temple tank.
</p>
<p>The gods have always been attracted to mountains and they have great mountains for the symbolism and appearance of the temple. There was an impulse to create soaring towers that looked like mountain ranges. Mount Kailasa in the Himalayas is the celestial abode of Shiva and the Kailasa temple at Ellora us the architectural interpretation of this mountain. To reinforce this symbolism temples were originally painted white to make them look even more like snow covered mountains.
</p>
<p>In India caves have always been thought of as places of great sanctity. Most of the earliest surviving Buddhist, Jain and Hindu shrines are rock cut caves. In later Hindu temples the garbagriha is designed to resemble a cave. It is small and dark and the surfaces of the walls are unadorned and massive. It is a place that encourages meditation which is possible only in solitude. Approaching the shrine is a movement from open spaces to a confined small space; from light to darkness, from a profusion of visual form and decoration to the visual simplicity of the cave. From this sanctuary the implied movement is vertical, to the symbolic mountain peak directly above the image of the god. This movement upwards is linked wo the idea of enlightenment which is identified with the crowning final of the temple - the amalaka or sikara.
</p>
</div>
<button type="button" class="btn btn-primary btn-lg" onclick="location.href='getstarted.php'">GET STARTED</button>
</div>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p style="color:black;">Made By <a href="https://github.com/Akshansh05" data-toggle="tooltip" style="color:Blue;"><br> AKSHANSH OHM</a></p> 
</footer> 
<script>
// Get the modal
// When the user clicks anywhere outside of the modal, close it

var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
$('#id01').click(function(e) {
    if (e.target == modal) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
$('#id02').click(function(e) {
    if (e.target == modal1) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
 $(function(){ 
     var navMain = $(".navbar-collapse"); // avoid dependency on #id
     // "a:not([data-toggle])" - to avoid issues caused
     // when you have dropdown inside navbar
     navMain.on("click", "a:not([data-toggle])", null, function () {
         navMain.collapse('hide');
     });
 });

</script>

</body>
</html>

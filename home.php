<?php

include 'session.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Penguin - Home</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<div class="overlay">
<ul>
<div class="default-li">
<li><a class="active" href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li><a class="links" href="search.php"><i class="fa fa-search" aria-hidden="true"></i> Search</a></li>
<?php
if ($_SESSION['isStaff'] == true) {
?>
<li><a class="links" href="moderator.php">Mod Panel</a></li>
<?php if ($_SESSION['isAdmin'] == true) { ?>
<li><a class="links" href="admin.php">Admin Panel</a></li>
<?php } } ?>
<li><a class="links" href="store.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Store</a></li>
<li><a class="links" href="server.php"><i class="fa fa-server" aria-hidden="true"></i> Server</a></li>
<li><a class="links" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
</div>
<div class="profile-li">
<li class="profile-li">   <div class="dropdown-content">
      <a class="test2" href="settings.php"><font color="white"><i class="fa fa-cog" aria-hidden="true"></i> Settings<font></a>
      <a class="test" href="logout.php"><font color="white"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</font></a>
    </div><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>
<?php

include 'config.php';

$strUsername = $_SESSION['login_user'];

$mysql = mysqli_connect($strDBHost, $strDBUser, $strDBPass, $strDBName);

$resQuery = mysqli_query($mysql, "SELECT * FROM users WHERE username = '$strUsername'");


echo ' ' . $arrResults['username'] . '';
?>
</a>
</li></li>
</ul>  
<div class="container">
<div class="form">
<iframe src='http://frostpengu.pw/play/load.swf' width='950' height='600' frameborder=0></iframe><br><br>
<font face="Helvetica Neue">Staff &#9900; Staff &#9900; Staff &#9900; Staff</font><br><br>
<iframe src="https://discordapp.com/widget?id=201082225247125504&theme=light" width="900" height="200" allowtransparency="true" frameborder="0"></iframe>
</div>
</div>

</div>
<div class="footer">Designed by Jack. Coded by Lynx.</div> <!--Please don't remove this line.-->
</div>
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</html>

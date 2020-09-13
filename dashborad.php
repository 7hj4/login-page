<?php include "template/header.php";?>

<?php if(!isset($_SESSION['logged_in'])){
  header ('location:index.php');
}?>

<div class="container pt-5">
    <h1>Hi <?php echo $_SESSION['username'];?></h1>
    <br>
    <h1><a href="logout.php"> Logout</a></h1>

<?php include "template/footer.php";?>
	

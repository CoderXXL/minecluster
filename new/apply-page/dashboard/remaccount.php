<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Remove Account</title>
    <link rel="stylesheet" href="../assets/css/semantic.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
  </head>
  <?php
$db = mysqli_connect("localhost", "root", "1710", "apply");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>
  <body>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
      header("Location: index.php");
      exit;
    }
    include('../assets/includes/System.php');
    if(getRank($_SESSION["username"]) == "0"){
      header("Location: yourapply.php");
      exit;
    }
    if(getRank($_SESSION["username"]) == "1"){
      header("Location: applications.php");
      exit;
    }
     ?>
    <div class="ui labeled icon menu">
  <a class="item" href="account.php">
    <i class="user icon"></i>
    Settings
  </a>
  <a class="item" href="logout.php">
    <i class="lock icon"></i>
    Logout
  </a>
</div>
    <div class="ui container">
      <h1>Remove Account</h1>
      <br>
      <form class="ui form" action="remaccount.php" method="post">
        <div class="field">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username">
        </div>
        <button type="submit" name="submit" class="ui labeled button">
          Remove</button>
          <?php
          $loesch = mysqli_query($db, "DELETE FROM links WHERE id = '4'");
          ?>
      </form>
    </div>
  </body>
</html>

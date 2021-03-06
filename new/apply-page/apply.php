<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Write your application</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.php">
        <meta charset="UTF-8">
    </head>
    <body>
	<font color="white">
        <?php include("assets/php/header.php"); ?>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
    function checkAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
      url: "assets/js/usernamecheck.php",
      data:'username='+$("#username").val(),
      type: "POST",
      success:function(data){
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
      },
      error:function (){}
      });
    }
    </script>
    <p><img src="assets/images/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
    <section id="apply">
      <?php

      function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
      }

      if(isset($_GET["supporter"])){
        //Supporter Apply
        echo '
        <div class="box">

        </div>
        <div class="box">';
        if(isset($_GET["msg"])){
          $msg = $_GET["msg"];
          echo '<div class="error"><br><p>'.$msg.'</p><br></div>';
        }
        echo '<h1>Support / Moderation</h1>
        <p>Bitte fülle alle Lücken aus. Wir wünschen dir Viel Glück!</p>
        <form action="apply.php?send" method="post">
          <label for="name">Was ist dein Name?</label><br>
          <input type="text" name="name" placeholder="Dein Name" data-value-missing="Test" required><br>

          <label for="username">Was ist dein Minecraft Name?</label><br>
          <input type="text" name="username" id="username" onBlur="checkAvailability()" placeholder="MC Username" required>
          <label for="username" id="user-availability-status"></label><br>

          <label for="age">Wie alt bist du?</label><br>
          <input type="text" name="age" placeholder="Alter" required><br>
          <label for="email">Deine Email?</label><br>
          <input type="email" name="email" placeholder="Gültige Email" required><br>
          <label for="lang">Welche Sprachen sprichst du?</label><br>
          <input type="text" name="lang" placeholder="Sprachen" required><br>
          <label for="online">Wie viel Zeit kannst du in den Server investieren?</label><br>
          <input type="text" name="online" placeholder="Onlinestunden pro Woche" required><br>
          <label for="why">Warum möchtest du dich bei uns berweben?</label><br>
          <textarea type="text" name="why" placeholder="Deine Argumente.." required></textarea><br>
          <label for="experience">Welche Erfahrungen hast du im Support?</label><br>
          <textarea type="text" name="experience" placeholder="Deine Erfahrungen.." required></textarea><br>
          <label for="others">Sonstiges</label><br>
          <textarea type="text" name="others" placeholder="Hast du uns sonst noch etwas mitzuteilen"></textarea><br>
          <center><input type="hidden" name="rank" value="supporter">
		  <center>
		  <a href="https://minecluster.de/go/apply/" class="myButton">Zurück</a>
          <button type="submit" class="myButton">Absenden</button>
        </form>
        </div>
        <div class="box">

        </div>
        ';
      } else if(isset($_GET["developer"])){
        //Developer Apply
        echo '
        <div class="box">

        </div>
        <div class="box">
          <h1>WEB-/GAME-Entwickler</h1>
          <p>Bitte fülle alle Lücken aus. Wir wünschen dir Viel Glück!</p>
          <form action="apply.php?send" method="post">
            <label for="name">>Was ist dein Name?</label><br>
            <input type="text" name="name" placeholder="Dein Name" data-value-missing="Test" required><br>

            <label for="username">Was ist dein Minecraft Name?</label><br>
            <input type="text" name="username" id="username" onBlur="checkAvailability()" placeholder="MC Username" required>
            <label for="username" id="user-availability-status"></label><br>

            <label for="age">Wie alt bist du?</label><br>
            <input type="text" name="age" placeholder="Alter" required><br>
            <label for="email">Deine Email?</label><br>
            <input type="email" name="email" placeholder="Gültige Email" required><br>
            <label for="age">Seit wann programmierst du?</label><br>
            <input type="text" name="since" placeholder="In Monaten" required><br>
            <label for="lang">Welche "programmier Sprachen" beherrscht du einigermaßen?</label><br>
            <input type="text" name="lang" placeholder="Java, PHP, ..." required><br>
            <label for="online">Wie viel Zeit kannst du in den Server investieren?</label><br>
            <input type="text" name="online" placeholder="Onlinestunden pro Woche" required><br>
            <label for="why">Warum möchtest du dich bei uns berweben?</label><br>
            <textarea type="text" name="why" placeholder="Deine Argumente.." required></textarea><br>
            <label for="experience">Hast du erfahrungen in der Entwicklung?</label><br>
            <textarea type="text" name="experience" placeholder="Deine Erfahrungen.." required></textarea><br>
            <label for="others">Sonstiges</label><br>
            <textarea type="text" name="others" placeholder="Hast du uns sonst noch etwas mitzuteilen?"></textarea><br>
            <input type="hidden" name="rank" value="developer">
			<center>
			<a href="https://minecluster.de/go/apply/" class="myButton">Zurück</a>
            <button type="submit" class="myButton">Absenden</button>
          </form>
        </div>
        <div class="box">

        </div>
        ';
      } else if(isset($_GET["builder"])){
        //Builder Apply
        echo '
        <div class="box">

        </div>
        <div class="box">
          <h1>MCDE - Bauteam</h1>
          <p>Bitte fülle alle Lücken aus. Wir wünschen dir Viel Glück!</p>
          <form action="apply.php?send" method="post">
            <label for="name">>Was ist dein Name?</label><br>
            <input type="text" name="name" placeholder="Dein Name" data-value-missing="Test" required><br>

            <label for="username">Was ist dein Minecraft Name?</label><br>
            <input type="text" name="username" id="username" onBlur="checkAvailability()" placeholder="MC Username" required>
            <label for="username" id="user-availability-status"></label><br>

            <label for="age">Wie alt bist du?</label><br>
            <input type="text" name="age" placeholder="Alter" required><br>
            <label for="email">Deine Email?</label><br>
            <input type="email" name="email" placeholder="Gültige Email" required><br>
            <label for="age">Seit wann baust du?</label><br>
            <input type="text" name="since" placeholder="In Monaten" required><br>
            <label for="lang">Bitte füge Links von deinen Bauten an?</label><br>
            <input type="text" name="lang" placeholder="https://prntscr.com/gallery.html z.B." required><br>
            <label for="online">Wie viel Zeit kannst du in den Server investieren?</label><br>
            <input type="text" name="online" placeholder="Onlinestunden pro Woche" required><br>
            <label for="why">Warum möchtest du dich bei uns berweben?</label><br>
            <textarea type="text" name="why" placeholder="Deine Argumente.." required></textarea><br>
            <label for="experience">Hast du erfahrungen in der Architektur?</label><br>
            <textarea type="text" name="experience" placeholder="Deine Erfahrungen.." required></textarea><br>
            <label for="others">Sonstiges</label><br>
            <textarea type="text" name="others" placeholder="Hast du uns sonst noch etwas mitzuteilen?"></textarea><br>
            <input type="hidden" name="rank" value="developer">
			<center>
			<a href="https://minecluster.de/go/apply/" class="myButton">Zurück</a>
            <button type="submit" class="myButton">Absenden</button>
          </form>
        </div>
        <div class="box">

        </div>
        ';
      } else if(isset($_GET["send"])){
        //Sends Apply
        if(isset($_POST["rank"])){
          include('database.php');
          if($_POST["rank"] == "supporter"){
            $name = mysqli_real_escape_string($mysqli, $_POST["name"]);
            $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
            $age = mysqli_real_escape_string($mysqli, $_POST["age"]);
            $lang = mysqli_real_escape_string($mysqli, $_POST["lang"]);
            $online = mysqli_real_escape_string($mysqli, $_POST["online"]);
            $why = mysqli_real_escape_string($mysqli, $_POST["why"]);
            $experience = mysqli_real_escape_string($mysqli, $_POST["experience"]);
            $others = mysqli_real_escape_string($mysqli, $_POST["others"]);
            $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
            $time = time();

            //Check database
            include('assets/includes/System.php');
            if(isUsernameExistRootDirectory($username)){
              header("Location: apply.php?supporter&msg=The username is already taken.");
              exit;
            }

            //Data save in database
            $abfrage2 = "INSERT INTO supporter (status, name, username, age, lang, onlinetime, why, experience, others, created_at) VALUES ('0', '$name', '$username', '$age', '$lang', '$online', '$why', '$experience', '$others', $time)";
            $ergebnis2 = mysqli_query($mysqli,$abfrage2) or die(mysqli_error($mysqli));
            $genpw = generateRandomString();
            $hashpw = password_hash($genpw, PASSWORD_BCRYPT);
            $time = time();
            $abfrage3 = "INSERT INTO accounts (username, email, password, rank, ban, token, created_at, lastlogin) VALUES ('$username', '$email', '$hashpw', '0', '0', 'null', '$time', 'null')";
            $ergebnis3 = mysqli_query($mysqli,$abfrage3) or die(mysqli_error($mysqli));
            echo '<h5 class="container" style="color: green;">We have received your apply as supporter.</h5><br>';
            echo '<h1 class="container">We have generated you a account to check your apply.</h1><br>
            <h1 class="container">Username: '.$username.'</h1><br>
            <h1 class="container">Password: '.$genpw.'</h1>';
            echo '<br><form class="container" action="dashboard/index.php?login" method="post">
              <input type="hidden" name="username" value="'.$username.'">
              <input type="hidden" name="password" value="'.$genpw.'">
              <button type="submit" class="myButton">Login</button>
            </form>';

          } else if($_POST["rank"] == "developer"){
            $name = mysqli_real_escape_string($mysqli, $_POST["name"]);
            $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
            $age = mysqli_real_escape_string($mysqli, $_POST["age"]);
            $since = mysqli_real_escape_string($mysqli, $_POST["since"]);
            $lang = mysqli_real_escape_string($mysqli, $_POST["lang"]);
            $online = mysqli_real_escape_string($mysqli, $_POST["online"]);
            $why = mysqli_real_escape_string($mysqli, $_POST["why"]);
            $experience = mysqli_real_escape_string($mysqli, $_POST["experience"]);
            $others = mysqli_real_escape_string($mysqli, $_POST["others"]);
            $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
            $time = time();

            //Check database
            include('assets/includes/System.php');
            if(isUsernameExistRootDirectory($username)){
              header("Location: apply.php?supporter&msg=The username is already taken.");
              exit;
            }

            //Data save in database
            $abfrage2 = "INSERT INTO developer (status, name, username, age, since, lang, online, why, experience, others, created_at) VALUES ('0', '$name', '$username', '$age', '$since', '$lang', '$online', '$why', '$experience', '$others', $time)";
            $ergebnis2 = mysqli_query($mysqli,$abfrage2) or die(mysqli_error($mysqli));
            $genpw = generateRandomString();
            $hashpw = password_hash($genpw, PASSWORD_BCRYPT);
            $time = time();
            $abfrage3 = "INSERT INTO accounts (username, email, password, rank, ban, token, created_at, lastlogin) VALUES ('$username', '$email', '$hashpw', '0', '0', 'null', '$time', 'null')";
            $ergebnis3 = mysqli_query($mysqli,$abfrage3) or die(mysqli_error($mysqli));
            echo '<h5 class="container" style="color: green;">We have received your apply as developer.</h5><br>';
            echo '<h1 class="container">We have generated you a account to check your apply.</h1><br>
            <h1 class="container">Username: '.$username.'</h1><br>
            <h1 class="container">Password: '.$genpw.'</h1>';
            echo '<br><form class="container" action="dashboard/index.php?login" method="post">
              <input type="hidden" name="username" value="'.$username.'">
              <input type="hidden" name="password" value="'.$genpw.'">
              <button type="submit" class="myButton">Login</button>
            </form>';

          } else if($_POST["rank"] == "builder"){
            $name = mysqli_real_escape_string($mysqli, $_POST["name"]);
            $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
            $age = mysqli_real_escape_string($mysqli, $_POST["age"]);
            $since = mysqli_real_escape_string($mysqli, $_POST["since"]);
            $lang = mysqli_real_escape_string($mysqli, $_POST["lang"]);
            $online = mysqli_real_escape_string($mysqli, $_POST["online"]);
            $why = mysqli_real_escape_string($mysqli, $_POST["why"]);
            $experience = mysqli_real_escape_string($mysqli, $_POST["experience"]);
            $others = mysqli_real_escape_string($mysqli, $_POST["others"]);
            $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
            $time = time();

            //Check database
            include('assets/includes/System.php');
            if(isUsernameExistRootDirectory($username)){
              header("Location: apply.php?supporter&msg=The username is already taken.");
              exit;
            }

            //Data save in database
            $abfrage2 = "INSERT INTO builder (status, name, username, age, since, online, why, experience, example, others, created_at) VALUES ('0', '$name', '$username', '$age', '$since', '$online', '$why', '$experience', '$example', '$others', $time)";
            $ergebnis2 = mysqli_query($mysqli,$abfrage2) or die(mysqli_error($mysqli));
            $genpw = generateRandomString();
            $hashpw = password_hash($genpw, PASSWORD_BCRYPT);
            $time = time();
            $abfrage3 = "INSERT INTO accounts (username, email, password, rank, ban, token, created_at, lastlogin) VALUES ('$username', '$email', '$hashpw', '0', '0', 'null', '$time', 'null')";
            $ergebnis3 = mysqli_query($mysqli,$abfrage3) or die(mysqli_error($mysqli));
            echo '<h5 class="container" style="color: green;">We have received your apply as builder.</h5><br>';
            echo '<h1 class="container">We have generated you a account to check your apply.</h1><br>
            <h1 class="container">Username: '.$username.'</h1><br>
            <h1 class="container">Password: '.$genpw.'</h1>';
            echo '<br><form class="container" action="dashboard/index.php?login" method="post">
              <input type="hidden" name="username" value="'.$username.'">
              <input type="hidden" name="password" value="'.$genpw.'">
              <button type="submit" class="myButton">Login</button>
            </form>';

          }
        } else {
          echo '<h5 class="container" style="color: red;">An error occurred while sending the application.</h5>';
        }
      } else {
        echo '<h5 class="container" style="color: red;">No page was requested.</h5>';
      }
       ?>
    </section>
  </body>
</html>

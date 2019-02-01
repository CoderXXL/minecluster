<?php include("assets/php/config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.php">
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
    </head>
    <body>
        <header>
            <div class="container">
                <img src="<?php echo $logo ?>" alt="logo" class="logo">
                <nav>
                    <ul>
                        <li><a href="<?php echo $Home ?>"><i class="fa fa-home" aria-hidden="true"></i> <strong>HOME</strong></a></li>
                        <li><a href="https://minecluster.de/go/apply/dashboard/"><i class="fa fa-sign-in" aria-hidden="true"></i> <strong>LogIn</strong></a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </body>
</html>
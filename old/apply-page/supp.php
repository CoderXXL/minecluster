<?php include("assets/php/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.php">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php include("assets/php/header.php"); ?>
        <br>
        <br>
        
         <div style="width:800px; margin:0 auto;">
             <div class="Schrift1">
                <i class="fa fa-users" aria-hidden="true"></i><?php echo $UberschriftSupporter ?>
            </div>
             <br>
            <div class="Schrift2">
                <?php echo $mod ?>
            </div>
            <br>
            <br>
            <?php if ($BWPSupporter): ?>
            <a href="apply.php?supporter"><button class="buttonm button1" onclick="window.location.href="apply.php?supporter""> JETZT BEWERBEN</button></a>
            <?php else: ?>
            <button class="buttonk button1">KEINE BEWERBUNGSPHASE</button>
            <?php endif ?>
         </div>
        
        
        <br>
        <br>
        <?php include("assets/php/footer.php"); ?>
        <br>
        <br>
    </body>
</html>

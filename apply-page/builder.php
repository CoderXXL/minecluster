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
                <i class="fa fa-cubes" aria-hidden="true"></i><?php echo $UberschriftBuilder ?>
            </div>
             <br>
            <div class="Schrift2">
                <?php echo $builder ?>
            </div>
            <br>
            <br>
            <?php if ($BWPBuilder): ?>
            <a href="apply.php?builder"><button class="buttonm button1" onclick="window.location.href="apply.php?builder""> JETZT BEWERBEN</button></a>
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

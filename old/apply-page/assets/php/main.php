<?php include("assets/php/config.php"); ?>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.php">
        <meta charset="UTF-8">
    </head>
    <body>
        <div style="width:800px; margin:0 auto;">
            
            <div class="Schrift1">
                <i class="fa fa-paper-plane" aria-hidden="true"></i><?php echo $Uberschrift ?>
            </div>
            <br>
            <?php if ($Text1Boolean): ?>
            <div class="Schrift2">
                <?php echo $text1 ?>
            </div>
            <br>
            <?php endif ?>
            <?php if ($SupporterButton): ?>
                <button class="buttonm button1" onclick="window.location.href='supp.php'"><i class="fa fa-users" aria-hidden="true"></i> <?php echo $mod_or_supp ?></button>
                <br>
                <br>
            <?php endif ?>
            <?php if ($Text2Boolean): ?>
            <div class="Schrift2">
                <?php echo $text2 ?>
            </div>
            <br>
            <?php endif ?>
            <?php if ($BuilderButtonBoolean): ?>
            <button class="buttonb button1" onclick="window.location.href='builder.php'"><i class="fa fa-cubes" aria-hidden="true"></i> <?php echo $architekt ?></button>
            <br>
            <br>
            <?php endif ?>
            <?php if ($Text3Boolean): ?>
            <div class="Schrift2">
                <?php echo $text3 ?>
            </div>
            <br>
            <?php endif ?>
            <?php if ($DeveloperButton): ?>
            <button class="buttond button1" onclick="window.location.href='dev.php'"><i class="fa fa-cogs" aria-hidden="true"></i> <?php echo $dev ?></button>
            <?php endif ?>
        </div>
    </body>
</html>
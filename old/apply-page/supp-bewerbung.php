<?php include("assets/php/config.php"); ?>
<?php include("assets/php/header.php"); ?>

        <?php
        header('Content-type: text/html; charset=utf-8');  
              require 'phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send'])){
		$name 		    	= $_POST['name'];
		$mcname   			= $_POST['mcname'];
		$email	 			= $_POST['email'];
		$geb 		    	= $_POST['geb'];
		$geschlecht 		= $_POST['geschlecht'];
		$stunden 	        = $_POST['stunden'];
		$sprache	     	= $_POST['sprachen'];
		$vorstellung	    = $_POST['vorstellung'];
		$stark	            = $_POST['stark'];
		$team    			= $_POST['team'];
		$schluss       	    = $_POST['schluss'];
		$subject 		= "Neue Supporter Bewerbung";
					
		$smtpMail = "smtp.gmail.com";
		$smtpPasswort = "minecluster_admin_acc_apply";
		$mail = new PHPMailer;

		$mail->CharSet = 'utf-8';
		$mail->Host = 'SMTP HOST';
		$mail->Port = 25;
		$mail->SMTPSecure = 'none';
		$mail->SMTPAuth = true;
		$mail->Username = $smtpMail;
		$mail->Password = $smtpPasswort;
		$mail->setFrom('apply.minecluster@gmail.com', 'APPLY SUPPORTER');
		$mail->addReplyTo($to_id, $to_id);
		$mail->addAddress('apply.minecluster@gmail.com');
		$mail->Subject = $subject;

		if(! isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$client_ip = $_SERVER['REMOTE_ADDR'];
		} else {
			$client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}

	 
		    $body  = "
		    <b>Neue Supporter Bewerbung</b>
                    <br>
                    <br>
                    <b>Name:</b> $name
                    <br>
                    <b>Minecraft Name:</b> $mcname
                    <br>
                    <b>E-mail:</b> $email
                    <br>
                    <b>Geburtstag:</b> $geb
                    <br>
                    <b>Geschlecht:</b> $geschlecht
                    <br>
                    <b>Stunden:</b> $stunden
                    <br>
                    <b>Sprachen:</b> $sprache
                    <br>
					<br>
                    <b>Vorstellung:</b><br>
					$vorstellung
                    <br>
					<br>
                    <b>Stärken und Schächen:</b><br>
					$stark
                    <br>
                    <br>
                    <b>Warum sollt ihr mich nehmen:</b><br>
					$team
                    <br>
					<br>
                    <b>Schlusswort</b><br>
					$schluss
                    <br> ";
		    
                    $mail->msgHTML($body);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } else {
                       echo '<div style="width:800px; margin:0 auto;">
					   									<br>
									<br>
									<center><img src="https://crafatar.com/avatars/'.$mcname.'?&overlay"></center>
                                    <h1><center>Vielen Dank für Ihre Bewerbungsanfrage.</center></h1>
                                    <h2><center>Wir werden uns schnellstmöglich bei Ihnen melden</center></h2>
                                    <br>                            
                            </div>';
			echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
		       header("Refresh: 10; index.php");
		     }					                   
               }
?>
        
        <br>
		<br>
        <div style="width:800px; margin:0 auto;">
        
            <div class="Schrift1">
                <i class="fa fa-paper-plane" aria-hidden="true"></i> Supporter Bewerbungsformular
            </div>
        <br>
            <form role="form" class="well" method="post" action="supp-bewerbung.php">
                <input type="text" id="name" name="name" placeholder="Name:">
                <input type="text" id="mcname" name="mcname" placeholder="Minecraft Name:">
                <input type="email" id="email" name="email" placeholder="E-Mail:">
                <input type="text" id="geb" name="geb" placeholder="Geburtstag:">
                
                <select type="pickup_place" id="geschlecht" name="geschlecht">
                    <option value="" selected="selected">Geschlecht: Bitte auswählen</option>
                    <option value="Männlich">Männlich</option>
                    <option value="Weiblich">Weiblich</option>
                </select>
                
                <input type="text" id="stunden" name="stunden" placeholder="Verfügbare Zeit in Studen pro Woche:">
                <input type="text" id="sprachen" name="sprachen" placeholder="Welche Sprachen beherrscht du:">
                
                <textarea id="vorstellung" name="vorstellung" rows="5" cols="20" placeholder="Bitte stelle dich kurz vor !"></textarea>
                <textarea id="stark" name="stark" rows="5" cols="20" placeholder="Was sind deine Stärken und Schwächen ?"></textarea>
                <textarea id="team" name="team" rows="5" cols="20" placeholder="Warum sollen wir dich nehmen?"></textarea>
                <textarea id="schluss" name="schluss" rows="5" cols="20" placeholder="Schlusswort"></textarea>
                <br>
                <input type="submit" name="send"  value="ABSCHICKEN">
                <br>
                <br>
    
            </form>

        </div>
        <br>
        <br>
        <?php include("assets/php/footer.php"); ?>
		<br>
        <br>
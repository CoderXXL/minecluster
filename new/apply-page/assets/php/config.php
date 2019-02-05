<?php
/*APPLY - SYSTEM - © 2017 Tim Emrich
 *Vielen Dank dass Sie das Apply System nutzen.
 *Ich lasse Ihnen alle Möglichkeiten offen am Apply System code sachen zu ändern.
 */

 /* TEXTE UND BUTTONS AKTIVIEREN UND DEAKTIVIEREN */

/*Aktiviere oder Deaktiviere den "Bewerben als Supporter" Button | true = Aktiv / false = Deaktiv*/
$SupporterButton = true;
/*Aktiviere oder Deaktiviere den "Bewerben als Builder" Button | true = Aktiv / false = Deaktiv*/
$BuilderButtonBoolean = true;
/*Aktiviere oder Deaktiviere den "Bewerben als Developer" Button | true = Aktiv / false = Deaktiv*/
$DeveloperButton = true;

/*Aktiviere oder Deaktiviere den Text 1 auf der Startseite | true = Aktiv / false = Deaktiv*/
$Text1Boolean = true;
/*Aktiviere oder Deaktiviere den Text 2 auf der Startseite | true = Aktiv / false = Deaktiv*/
$Text2Boolean = true;
/*Aktiviere oder Deaktiviere den Text 3 auf der Startseite | true = Aktiv / false = Deaktiv*/
$Text3Boolean = true;

/*Bewerbungsphase Supporter aktiv oder nicht aktiv | true = Aktiv / false = Deaktiv*/
$BWPSupporter = true;
/*Bewerbungsphase Builder aktiv oder nicht aktiv | true = Aktiv / false = Deaktiv*/
$BWPBuilder = true;
/*Bewerbungsphase Developer aktiv oder nicht aktiv | true = Aktiv / false = Deaktiv*/
$BWPDeveloper = true;

/* - - - Color Config - - -*/

/*Hintergrund Farbe der Seite*/
$bg_color = "#353742";

/* ### NAVBAR ### */
/*Navigations Farbe*/
$navbar_color = "#36404A";
/*Navbar Schrift farbe*/
$Schrift_color = "#FFF";
/*Navbar Schrift Farbe Maushover*/
$SchriftHover_color = "#B2B2B2";
/*Navbar Schatten Farbe*/
$Shadow_color = "#2B333B";

/*Welche Schrift Art soll die Webseite haben
 *Möglich sind:
 *'Roboto', sans-serif;
 *'Open Sans', sans-serif;*/
$fontType = "'Roboto', sans-serif;";

/* ### MAIN ### */
/*Überschrift Farbe*/
$Uberschrift_color = "#E0E0E0";
/*Copyright Zeichen Farbe*/
$copyright = "#B2B2B2";
/*Formular Hintergrund Farbe*/
$formular = "#353742";
/*Formular Schrift farbe*/
$formularfont_color = "#fff";
/*Formular Border Farbe*/
$formularborder_color = "#fff";

/* ### BUTTONS ### */
/*Moderator Button Farbe*/
$ModButton_color = "#4CAF50"; /*#4CAF50*/
/*Moderator Button Schrift Farbe*/
$ModButtonSchrift_color = "#FFF";
/*Moderator Button Schatten Farbe*/
$ModButtonShadow_color = "#266D28";

/*Builder Button Farbe*/
$BuilderButton_color = "#F8A900";
/*Builder Button Schrift Farbe*/
$BuilderButtonSchrift_color = "#FFF";
/*Builder Button Schatten Farbe*/
$BuilderButtonShadow_color = "#B27907";

/*Developer Button Farbe*/
$DevButton_color = "#44CCCC"; /*#44CCCC*/
/*Developer Schrift Farbe*/
$DevButtonSchrift_color = "#FFF";
/*Developer Schatten Farbe*/
$DevButtonShadow_color = "#136B6B";

/* - - - LINK UND LOGO CONFIG - - - */

/*Sobald man den Button HOME klickt wird man an die Domain weitergeleitet.*/
/*Gebe hier deine Main Domain ein*/
$Home = "http://minecluster.de/";

/*Der Link zum Impressum von euer Seite*/
$linkimpressum = "https://minecluster.de/Impressum.html";

/*Das Logo was ganz oben Links angezeigt wird. Gebe den Pfard zum Logo dein oder einen Link*/
/*Pfad: "assets/img/logo.png"
 *Domain: "http://DEINE-DOMAIN.de/apply/assets/img/logo.png" */
$logo = "assets/img/mlogo.png";

/* - - - TEXT CONFIG - - - */

/*Der Title Text wird in den Tabs angezeigt*/
$title = "Minecluster Apply - © 2015-2018";

/*Überschrift auf der Startseite*/
$Uberschrift = " MINECLUSTER - BEWERBEN";
/*Copyright Text ganz unten auf jeder Seite */
$copyright = "© 2015-2018 Minecluster.de";
$impressum = "Impressum & Datenschutzerklärung";

/*Text vom Supporter Button*/
$mod_or_supp = " SUPPORTER";
/*Text vom Developer Button*/
$dev = " DEVELOPER";
/*Text vom Builder Button*/
$architekt = " BUILDER";

/*Überschrift von der Supporter Infoseite*/
$UberschriftSupporter = " INFOS - SUPPORT/MODERATION";
/*Überschrift von der Builder Infoseite*/
$UberschriftBuilder = " INFOS - BUILDING/ARCHITECTURE";
/*Überschrift von der Developer Infoseite*/
$UberschriftDev = " INFOS - DEVELOPMENT/CREATION";

/*Info text von der Supporter Infoseite*/
$mod = "
Im Bereich Moderation kümmerst Du Dich um alle User des Server-Netzwerks, sowie deren Fragen und Probleme. Dabei beschäftigst Du Dich in jeder Phase mit bestimmten Schwerpunkten und Hauptaufgaben – dennoch arbeiten alle gemeinsam und unabhängig von Rang oder Phase auf dasselbe Ziel hinaus: Das Entwickeln und Aufrechterhalten einer langfristigen und angenehmen Spielatmosphäre und dem damit verbundenen professionellen Support für die User des Server-Netzwerkes.
<br>
<br>
Wenn Du also als Teammitglied im Bereich der Moderation aktiv werden möchtest, solltest Du viel Zeit und Motivation aufbringen können, Dich für die User des Server-Netzwerkes einzusetzen. Vor allem ist es wichtig, dass Du Spaß und Geduld bei deinen Aufgaben und beim Beantworten der, sich teils immer wiederholenden, Fragen hast. Auch solltest Du selbstbewusst und zugleich freundlich gegenüber den Usern auftreten können.
<br>
<br>
Für eine Bewerbung im Bereich Moderation musst Du einen aufnahmefähigen Computer mit anständigem Internet-Upload besitzen. Ein Mindestalter gibt es nicht, allerdings bevorzugen wir Bewerberinnen und Bewerber im Alter von 12 bis 19 Jahren.
<br>
<br>
Solltest Du also die oben genannten Bedingungen erfüllen und Interesse an einer Teammitgliedschaft im Bereich der Moderation haben, so kannst Du Dich hier sehr gern während einer Bewerbungsphase bewerben:
";

/*Info text von der Builder Infoseite*/
$builder = "
Als Builder bei Minecluster.de begleitest du deine Werke von der Idee bis zur Umsetzung. Hierbei übernimmst du Verantwortung für die Instanthaltung dieser.
<br>
<br>
Bitte beachte das du als Builder den Weg für neue Spielmodi ebnest und dem Server so eine große Hilfe bist. Das ständige erweitern des Mappools ist hierbei eine deiner Hauptaufgaben.
<br>
<br>
Um dich als Builder zu bewerben, ist kein Mindestalter von nöten. Wir achten nur auf deine Baulichen Fähigkeiten in der Minecraft Version 1.8. Deine Baulichen Fähigkeiten werden im Laufe deiner Arbeit mit unserem Netzwerk immer besser und werden unsererseits gefördert um dich in deinen Stärken besser zu unterstützen und dein Schwächen auszulöschen. Bitte beachte das deine Bauwerke sehr detailliert sind. Besonders wird auch auf das Terraforming geachtet, welches deinem Bauwerk den letzten Schliff versetzten soll. 
";

/*Info text von der Developer Infoseite*/
$developer = "
Als Developer bei Minecluster.de begleitest du deine Software von der Idee bis zum Deployment und übernimmst Verantwortung für die Weiterentwicklung dieser.
<br>
<br>
Im Austausch mit Konzeptentwicklern wirst du an anspruchsvollen Netzwerk- oder Gameprojekten mitarbeiten. Neben dem Umgang mit Git und Maven setzten wir folgende Kentnisse voraus:
<br>
<br>
<b>Game Developer</b>
<br>
<br>
Als Game Developer bist du verantwortlich für die Entwicklung und Pflege eines Gametypes oder einzelner Module. Du solltest coole und einzigartige Minecraft Features entwickeln wollen und dabei bereit sein bis an die Grenzen des Machbaren zu gehen. Neben Enthusiasmus für gute Minecraft Modi solltest du bereits fundierte Programmierkenntnisse mitbringen insbesondere im Hinblick auf Java und die Bukkit API (mind. neun Monate mit Bukkit). Auch solltest du in der Lage sein, asynchron zu programmieren.
<br>
<br>
<b>Netzwerk Developer</b>
<br>
<br>
Hier steht die Weiter- und Neuentwicklung von Netzwerksoftware sowie dazugehörigen Modulen im Vordergrund. Du trägst dazu bei unseren Usern zu allen Zeiten ein konsistent gutes Spielerlebnis zu bieten und baust Schnittstellen und Features, welche die Grundlage für jegliche Interaktionen auf und mit dem Netzwerk sind.
<br>
<br>
Du solltest mehr als 3 Jahre Erfahrung in Java haben und dich mit Datenbank-Strukturierung und Analyse (SQL / NoSQL) auskennen. Hierbei sind insbesondere Kenntnisse von Apache Cassandra/Datastax von Vorteil. jBeans Techniken (Gson, Yaml, ORM), Serialization sollten kein Fremdwort sein. Neben Kenntnissen von Guava 19, Netty 4, Trove4J wird auch die Fähigkeit zum asynchronen Programmieren (Critical Sections, Mutexes, Concurrency) vorausgesetzt.
<br>
<br>
Du solltest bereits Erfahrungen mit Produktionsumgebungen haben, die zuverlässig unter hoher Last performen müssen und Vorstellungen zur Architektur von hochverfügbaren resilienten Services für das Netzwerk mitbringen.
";

/*Text 1 von der Startseite über dem Bewerben als Supporter Button*/
$text1= "
Neben dem Bereich des Development, also der Instandhaltung und Entwicklung unserer Spiele, Netzwerksysteme und Features, deckt das Server-Netzwerk einen weiteren essentiellen Aufgabenbereich: Der Bereich der Moderation.
<br>
<br>
Das Aufgabenspektrum der Moderation setzt sich aus verschiedenen Rängen mit unterschiedlichen Schwerpunkten und Aufgaben zusammen, wobei jederzeit das Wohlbefinden und der Spaß der User auf unserem Server-Netzwerk im Vordergrund stehen. Ein Team aus rund 50 verantwortungsvollen, hilfsbereiten und kompetenten Mitgliedern kümmert sich täglich um die Probleme und Angelegenheiten der Userinnen und User – ingame, im Forum oder sogar auch auf dem TeamSpeak. Eine Tätigkeit im Bereich der Moderation ist somit die ideale Möglichkeit für dich, beim Projekt Minecluster.de mitwirken zu können, Verantwortung zu übernehmen und in einem großen und professionellen Team zu arbeiten. Der Bereich Moderation bildet den Draht zur Community und ist damit ein elementarer Bestandteil des Server-Netzwerkes.
<br>
<br>
Um den Ansprüchen der Spieler an uns gerecht zu werden, geben wir uns sehr viel Mühe bei unserer Arbeit und achten auf die Qualität unseres Teams. Daher sind wir auch bestrebt, unser Team stets zu erweitern und zu verbessern. Wenn du also nun Interesse bekommen hast unser Team unterstützen und ergänzen zu wollen, dann hast du hier die Möglichkeit dich zu bewerben.
<br>
<br>
Solltest du uns mit deinen Fähigkeiten und Engagement überzeugen, so würden wir uns freuen dich bei uns im Team begrüßen zu dürfen.
";

/*Text 2 von der Startseite Zwischen den Bewerben als Supporter und Bewerben als Builder Button*/
$text2= "
Gute Developer und gute Moderatoren bringen nichts ohne genauso gute Builder. Die Maps sind ein ellementarer Bestandteil des Netzwerkes und bezaubern den Spielern eine der besten Spiel möglichkeiten.
";

/*Text 3 von der Startseite zwischen dem Bewerben als Builder und Bewerben als Developer Button*/
$text3= "
Mit den wachsenden Spielerzahlen nahmen natürlich sowohl Umfang und zeitlicher Aufwand, als auch Anspruch der Spieler an unsere Arbeit enorm zu. Um diesen gerecht zu werden, kümmert sich ein großes Team mit verschiedensten Aufgaben täglich um die Sorgen und Wünsche unserer Community.
<br>
<br>
Zu diesen Aufgaben gehört natürlich die Entwicklung und Instandhaltung unserer Spiele und Netzwerksysteme, sowie das Erstellen von neuem Content und nützlichen Features. An dieser Aufgabe arbeitet ein Team aus fähigen Admins und Developern - erst sie ermöglichen diesen Server und machen ihn zu dem, was er heute ist.
";
?>
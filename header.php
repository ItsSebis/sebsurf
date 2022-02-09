<?php
  session_start();
  require_once 'config/config.inc.php';
  require_once 'includes/functions.inc.php';
  if (empty($_SERVER["HTTPS"]) && $_SERVER["HTTP_HOST"] == "sebsurf.stormarnschueler.de") {
    header("location: https://sebsurf.stormarnschueler.de");
    exit();
  }
  if (!isSetupt(con())) {
    header("location: setup.php");
    exit();
  }

  $version = "1.1.3";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SebSurf | SocialClient</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon-title.png">
  </head>
  <body>
    <div class="nav">
      <img src="img/icon-nav.png" alt="logo" class="logo">
      <div class="links">
        <?php
        if (isset($_SESSION["username"])) {
          echo '<a href="./" id="home" class="navihome">Home</a><br><br>';
          echo '<a href="profile.php" id="profile" class="navi">Events</a><br><br>';
          if (isTeamLeader(con(), $_SESSION["username"]) || getUserPower(con(), $_SESSION["username"]) >= 40) {
            echo '<a href="teams.php" id="teams" class="navi">Teams</a><br><br>';
            echo '<a href="datacenter.php" id="datas" class="navi">Datenbank</a><br><br>';
          }
          if (isAdmin(con(), $_SESSION["username"])) {
            $count = "";
            if (getAllRequestsCount(con()) != 0) {$count = " <span style='color: black; border: solid red; border-radius: 10px; background-color:
              red'>".getAllRequestsCount(con())."</span>";}
            echo '<a href="admin.php" id="admin" class="navi">Verwaltung'.$count.'</a><br><br>';
          }
          $count = "";
          if (getAllNotifyCount(con(), $_SESSION["username"]) != 0) {$count = " <span style='color: black; border: solid red; border-radius: 10px; background-color:
            red'>".getAllNotifyCount(con(), $_SESSION["username"])."</span>";}
          echo '<a href="notifications.php" id="notifies" class="navinotifies">Messenger'.$count.'</a><br><br>';
          echo '<a href="settings.php" id="settings" class="naviprofile">Profil</a><br><br>';
          echo '<a href="includes/logouts.inc.php" class="navilogout">Logout</a><br><br>';
        }
        else {
          echo '<a href="log-in.php" id="login" class="navilogin">Log in</a><br><br>';
        }
        echo '<br><a href="support.php" id="sup" class="navisupport">Support</a><br><br>';
        ?><br>
        <p style="font-size: smaller; font-weight: 100; color: grey; border-top: 1px solid grey; padding: 5px; width: fit-content; margin: 0 auto;"><?php echo($version); ?></p>
      </div>
    </div>

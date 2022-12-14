<?php
   session_start();

   include "db.php";
   if (!isset($_SESSION["email_address"])) {
      include "login_page.php";
   } else {
      include "home.php";
   }
?>
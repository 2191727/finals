<?php
   session_start();

   include "db.php";
   if (!isset($_SESSION["email_address"])) {
      include "login_page.html";
   } else {
      include "home.php";
   }
?>
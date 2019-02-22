<?php
    namespace miniapp\web;
    require_once("unauthorized.php");
    require_once("authorized.php");




    if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] == "a" && $_POST['password'] == 1 ){


      $found = new Found();
      $found->isWelcome();

    }
    elseif (isset($_POST['username']) 
            && isset($_POST['password']) 
            && $_POST['username'] != "admin" 
            && $_POST['password'] !=123) {
                
                $notFound = new NotFound();

                $notFound->ContentNotFound();
                
        
    }


?>
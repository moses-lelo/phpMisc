<?php

namespace miniapp\web;

class NotFound 
{
    public function ContentNotFound(){
        echo "<!DOCTYPE html>
              <html>
              <head>
                <meta charset=\"utf-8\">
                <title>Page Title</title>
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"../../css/404.css\">
                </head>
            <body>
                <div id=\"clouds\">
                <div class=\"cloud x1\"></div>
                <div class=\"cloud x1_5\"></div>
                <div class=\"cloud x2\"></div>
                <div class=\"cloud x3\"></div>
                <div class=\"cloud x4\"></div>
                <div class=\"cloud x5\"></div>
                </div>
                <div class='c'>
                <div class='_404'>404</div>
                <hr>
                <div class='_1'>THE PAGE</div>
                <div class='_2'>WAS NOT FOUND</div>
                <a class='btn' href='../../../index.php'>BACK TO MARS</a>
                </div>
                </body>
            </html>";
    }
}




?>
<?php
namespace miniapp\web;

class Found 
{
    

    public function isWelcome(){
        echo" <!DOCTYPE html>
        <html lang=\"fr\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"../../css/welcome.css\">
            <title>Welcome</title>
        </head>
        <body>
        <div class=\"container\">
        <section class=\"bg-blue\">
          <div class=\"title\">
            <h2>About</h2>
          </div>
          <div class=\"desc sans-serif f6\">
            <p>My vanity section, where, if you want to learn more about me, you'll find it here.</p>
          </div>
        </section>
        <section class=\"bg-red\">
          <div class=\"title\">
            <h2>Portfolio</h2>
          </div>
          <div class=\"desc sans-serif f6\">
            <p>Some selected samples of my work to date.</p>
          </div>
        </section>
        <section class=\"bg-green\">
          <div class=\"title\">
            <h2>Blog</h2>
          </div>
          <div class=\"desc sans-serif f6\">
            <p>The often infrequent and personal ramblings from a quirky, but curious guy.</p>
          </div>
        </section>
        <section class=\"bg-gold\">
          <div class=\"title\">
            <h2>Contact</h2>
          </div>
          <div class=\"desc sans-serif f6\">
            <p>From my social accounts to my contact info, here's where you'll find it.</p>
          </div>
        </section>
      </div>
      
        </body>
        </html>";
    }

}


?>
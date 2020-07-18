<?php 
    ini_set('display_errors', 0);
    $file = 'index.php';
    $content = '
    <?php
        require "vendor/autoload.php";
        use Bootstrap\Bootstrap;
        $bootstrap = new Bootstrap();
      ?>
      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      
          <title>Hello, world!</title>
        </head>
        <body>
          <h1>Hello, world!</h1>
      
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </body>
      </html>';
    // Create all directory 
    echo "[+] Creating all folders..".PHP_EOL;
    if(!is_dir('myWebsite')){
       mkdir(__DIR__."/myWebsite", 0777); 
       mkdir(__DIR__."/myWebsite/assets", 0777);
       mkdir(__DIR__."/myWebsite/assets/css", 0777);
       mkdir(__DIR__."/myWebsite/assets/js", 0777);
       mkdir(__DIR__."/myWebsite/assets/font", 0777);
       mkdir(__DIR__."/myWebsite/assets/img", 0777);
       if(!file_exists(__DIR__."/myWebsite/index.php")){
           fopen(__DIR__."/myWebsite/index.php", "r+");
           chmod(__DIR__."/myWebsite/index.php", 0777);
           file_put_contents(__DIR__."/myWebsite/index.php", $content, FILE_APPEND);
            echo "[+] Done ! ";
       }else{echo "[-] Error: File index.php already exists";}
    }else{
        die('[-] Error : File already exists !');
    }
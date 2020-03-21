<html>
   <head>
    <title>Attack Me</title>
    <div class="datentime">
        <?php
        echo "<h1>Hacker Page for Hackers</h1>";
        date_default_timezone_set('UTC');
        echo date('h:i:s, a l Y e');
        ?>
      </div>
   </head>
   <style>
   h1 {
        text-align: center;
        color: red;
   }
   body {
        background-color: slategrey;
   }
   .datentime {
        text-align: center;
        color: white;
        background-color: black;
   }
   </style>
   <body>
    <table>
        <tr><input type="text" name="username">


   </body>
</html>
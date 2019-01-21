<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
      $testo = 'Ciao, io mi chiamo Nicola';
      echo $testo;
      ?>
    </p>
    <p>
      <?php
        $lungStr = strlen($testo);
        echo $lungStr;
      ?>
    </p>
    <p>
      <?php
        $badWord = $_GET['name'];
        $strSubst = str_replace($badWord, "***", $testo);
        echo $strSubst;
      ?>
    </p>
  </body>
</html>

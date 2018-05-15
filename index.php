<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>esercizi php</title>
  </head>
  <body>
    <?php
    $nome = 'Alessandro';
    $cognome= ' Leita';
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    $data= $_GET;
    var_dump($data);
     ?>
     <h1>Ciao mi chiamo <?php echo $nome. $cognome;?></h1>
     <h1>Ciao mi chiamo <?php echo $_GET["name"] ?></h1>
     <p><?php echo $testo; ?></p>
     <h1><?php echo 'questo paragrafo è lungo '. strlen($testo). ' caratteri'?></h1>
     <h1><?php echo 'La badword è '. $_GET['badword']. ' e verrà sostituita con ***'; ?></h1>
     <p><?php echo str_replace($_GET['badword'], '***', $testo); ?><p>
  </body>
</html>

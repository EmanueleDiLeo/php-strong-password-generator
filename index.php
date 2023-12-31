<?php

  include __DIR__ . "/partials/functions.php";
  $error_message = '';
  $password = '';
  if(isset($_POST['pass-leng'])){
    $intLeng = intval(($_POST['pass-leng']));
    if(checkLeng($intLeng)){
      $password = randomPassword($intLeng);
      session_start();
      $_SESSION["sended_text"] = $password;
      header("Location: ./postArrive.php");
    }
    else{
     $error_message = 'ERRORE! ';
   }
  }




  include __DIR__ . "/partials/head.php";
?>



<body>

  <div class="container">
    <h1>Strong Password Generator</h1>
    <h4>Genera una password sicura</h4>
    <div>
      <p><?php echo $error_message ?>Scegliere una password con un minimo di 8 caratteri e massimo di 32 caratteri</p>
    </div>
    <div>
      <form action="index.php" method="post">
        <label class="form-label">Lunghezza password:</label>
        <input class="form-control mb-3" type="number" name="pass-leng" value="8">
        <button class="btn btn-primary">Invia</button>
        <!-- <button class="btn btn-secondary">Annulla</button> -->
      </form>
    </div>
  </div>
  
</body>
</html>
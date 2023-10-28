<?php
  session_start();

  if(isset($_SESSION["sended_text"])){
    $password = $_SESSION["sended_text"];
  }else{
    header("Location: ./index.php");
  }


  include __DIR__ . "/partials/head.php";
?>

<body>

  <div class="container text-center my-5">
    <h2>La password generata è:</h2>
    <p><?php echo $password ?></p>
    <a href="index.php">Torna indietro</a>
  </div>
  
</body>
</html>
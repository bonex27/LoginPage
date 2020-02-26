<?php
function checkUser($user,$pass){ 
    //Dati accesso DB
$servername = "127.0.0.1:3306";
$username = "quintab";
$password = "HA45@BMV";
$db = "quintab_es.4";

// Create connection  {"user":"bonex","pass":"123456"}
    	$conn = mysqli_connect($servername,$username,$password,$db) or die('Errore...');
       $query = "SELECT * FROM utenti";
       $result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row['user'];
      echo $row['password'];
    if($user == $row['user'] || $pass == $row['password'])
    { 
      mysqli_close ($conn);
     return true;
      }
    }
}        
else {
  mysqli_close ($conn);
    echo("Errore");
  return false; 
        
}
mysqli_close ($conn);
echo("Utente errato");
    return false;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="style/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    </head>
    <body>

      <?php

      if(checkUser($_GET["user"],$_GET["password"])== true)
      {
        echo ($_GET["user"].$_GET["password"]);
        echo'<div class="reg">
        <div class="form-group">
      <label for="exampleFormControlInput1">Accesso eseguito!</label>
      </div>
          <form method="GET" action="http://localhost/informatica/5B%20IA/php/Es.4">           
                <div class="col-auto my-1">
                  <button  class="btn btn-Danger"><- Back</button>
                </div>
            </form>
          </div>';
      }
      else{
          echo'<div class="reg">
          <div class="form-group">
        <label for="exampleFormControlInput1">Utente non presente!</label>
        </div>
            <form method="GET" action="http://localhost/informatica/5B%20IA/php/Es.4">           
                  <div class="col-auto my-1">
                    <button  class="btn btn-Danger"><- Back</button>
                  </div>
              </form>
            </div>';
      }
      ?>
    </body>
</html>
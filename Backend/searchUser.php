<?php
function checkUser($user,$pass){ 
    //Dati accesso DB
$servername = "127.0.0.1:8889";
$username = "Bonex";
$password = "123456";
$db = "quintab_es.4";

// Create connection  {"user":"bonex","pass":"123456"}
    	$conn = mysqli_connect($servername,$username,$password,$db) or die('Errore...');

       $query = "SELECT user, password FROM login";
       $result = mysql_query($query, $conn) or die('Errore...');
       echo(mysql_num_rows($result));
        //$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    echo $row['nome'];
    while($row = $result->fetch_assoc()) {
    if($user == $row['nome'] || $pass == $row['password'])
    {
      echo  $row['nome'];
      
      mysqli_close ($conn);
    echo("Good");
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

      if(checkUser($_GET["user"],$_GET["pass"])== true)
      {
        echo'<div class="reg">
        <div class="form-group">
      <label for="exampleFormControlInput1">Accesso eseguito!</label>
      </div>
          <form method="GET" action="signin.html">           
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
            <form method="GET" action="signin.html">           
                  <div class="col-auto my-1">
                    <button  class="btn btn-Danger"><- Back</button>
                  </div>
              </form>
            </div>';
      }
      ?>
    </body>
</html>
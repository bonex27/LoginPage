<?php
    //Dati accesso DB
$servername = "127.0.0.1:3306";
$username = "quintab";
$password = "HA45@BMV";
$db = "quintab_es.4";

// Create connection  {"user":"bonex","pass":"123456"}
if($_GET["sesso"]=="Maschio")
$_GET["sesso"] = 'M';
else
$_GET["sesso"] = 'F';
if($_GET["patB"]=="on")
$_GET["patB"] = 1;
else
$_GET["patB"]= 0;
if($_GET["patA"]=="on")
$_GET["patA"] = 1;
else
$_GET["patA"]= 0;
    	$conn = mysqli_connect($servername,$username,$password,$db) or die('Errore...');
       $query = "INSERT INTO `utenti` (`nome`, `cognome`, `email`, `pass`, `patA`, `patB`, `user`, `nazionalita`, `sesso`) VALUES ('".$_GET["nome"]."', '".$_GET["cognome"]."', '".$_GET["email"]."', '".$_GET["password"]."', '".$_GET["patA"]."', '".$_GET["patB"]."', '".$_GET["user"]."', '".$_GET["naz"]."', '".$_GET["sesso"]."')";
       mysqli_query($conn, $query) or die( mysqli_error($conn));
       echo $query;
?>
    
    <html>
    <head>
    <link rel='stylesheet' href='style/index.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
</head>
    <body>
    <div class = 'all'
    style='width: 450px;'>
        <div  style='
        background-color: green;
        border: 1px solid;
        border-radius: 14px;'>
        Riepilogo dati:
        </div>
    <div style='text-align: left;
    background-color: red;
    border: 1px solid;
        border-radius: 14px;'>
        
        Cognome =  <?php echo $_GET["cognome"]?><br>
        Nome =    <?php echo $_GET["nome"]?><br>
        User =  <?php echo $_GET["user"]?><br>
        Sesso =    <?php echo $_GET["sesso"]?><br>
        Nazione =  <?php echo $_GET["naz"]?><br>
       Patente/i =  <?php if($_GET["patA"] =="on")
                            echo A;
                            if($_GET["patB"] =="on")
                            echo B;?><br>
        Email =     <?php echo $_GET["email"]?><br>
        <form action='http://localhost/informatica/5B%20IA/php/Es.4'>
            <input class='btn btn-primary' type='submit' value='<- BACK' />
        </form>
        <label for="exampleFormControlSelect1">Registrazione avvenuta!</label>
        </div>
    </div>
    </body>
    </html>"


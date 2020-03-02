<?php
    //Dati accesso DB
$servername = "localhost:3306";
$username = "bonex"; //"quintab";
$password = "Pb12112001";//"HA45@BMV";
$db = "quintab_es.4";

// Create connection  {"user":"bonex","pass":"123456"}
if($_GET["sesso"]=="Maschio")
$_GET["sesso"] = 'M';
else
$_GET["sesso"] = 'F';
if(isset($_GET["patB"]))
    $_GET["patB"] = 1;    
else
    $_GET["patB"]= 0;

if(isset($_GET["patA"]))
    $_GET["patA"] = 1;
else
$_GET["patA"]= 0;

$_GET["password"] = md5($_GET["password"]);
    	$conn = mysqli_connect($servername,$username,$password,$db) or die( mysqli_connect_error());
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
    style="text-align: center; margin-top: 10%; background-color: yellow; margin-left: 20%; margin-right: 20%;border-style: solid; border-radius: 20px;">
        Riepilogo dati:
        </div>
    <div style="text-align: center; margin-top: 10%; background-color: yellow; margin-left: 20%; margin-right: 20%;border-style: solid; border-radius: 20px;">
        
        Cognome =  <?php echo $_GET["cognome"]?><br>
        Nome =    <?php echo $_GET["nome"]?><br>
        User =  <?php echo $_GET["user"]?><br>
        Sesso =    <?php echo $_GET["sesso"]?><br>
        Nazione =  <?php echo $_GET["naz"]?><br>
       Patente/i =  <?php if($_GET["patA"] ==1)
                            echo A;
                            if($_GET["patB"] ==1)
                            echo B;?><br>
        Email =     <?php echo $_GET["email"]?><br>
        <form action='../Frontend/index.html'>
            <input class='btn btn-primary' type='submit' value='<- BACK' />
        </form>
        <label for="exampleFormControlSelect1">Registrazione avvenuta!</label>
        </div>
    </div>
    </body>
    </html>"


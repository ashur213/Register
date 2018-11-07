<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
   <?php
    session_start();
    // ANVÄNDS FÖR ATT VISA FORMULÄREN I SLUTET ELLER INTE
    $show_form = true;
    
    // OM DET FINNS ERROR MESSAGE
    if(isset($_SESSION['error_msg'])){
        // Skriv ut error_msg
        echo $_SESSION['error_msg'] . "<br>";
       
        // TA BORT ERROR_MSG
        unset($_SESSION['error_msg']);
    }
    
    // KOLLA OM MAN HAR BESÖKT SIDAN FÖRUT
    if(isset($_SESSION['login'])){
        // har besökt sidan
        
        // OM MAN ÄR INLOGGAD
        if($_SESSION['login'] == "INLOGGAD"){
            $show_form = false; // VISA INTE FORMULÄREN
            echo "Välkommen   ".$_SESSION['name'] . " du är inloggad!"; // VISA VÄLKOMSTTEXT
            ?>

            <!-- Utloggningsformulär -->
            <form action="logout.php">
                <input type="submit" value="Logga ut">
            </form>

            <?php
        }
    }    
?>
       <h1>REGISTER:</h1> <br>
        <form action="register.php" method="POST">

            Namn: <input type="text" name="name"><br>
            Födelsedatum: <input type="date" name="birth"><br>
            Mail: <input type="email" name="mail"><br>
            Adress: <input type="text" name="address"><br>
            Lösenord: <input type="password" name="password">
            <input type="submit">

    </form>
</body>
<body>
   <form action="login.php" method="POST">
   <h1>Login:</h1>
    <br>Mail: <input type="email" name="mail"><br>
    Lösenord: <input type="password" name="password">
       <input type="submit"> 
    </form>
</body>
</html>

<?php
    //random number guessing script.
    session_start();
//chacking if there is already a number in the cookies
    if(!isset($_SESSION['randomNumber'])){
        $randomNumber = rand(1, 10); //generating a random number
        $_SESSION['randomNumber'] = $randomNumber; //and storing it to the session.
    }
?>
<html lang="en">
    <head>
        <title>Guess the number !</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="app.css">
    </head>
    <body>
        <div class="container">
            <article>
                <h2>There is a number between 1 and 10... Can you find it ?</h2>
                <form action="index.php" method="post">
                    <input type="text"name="numberGuess">
                    <input type="submit">
                </form>
                <?php
                //just checking the value and give the player a score.
                    if(isset($_POST['numberGuess'])){
                        if($_POST['numberGuess'] == $_SESSION['randomNumber']){
                            echo("<p>Congrats, you found the number !</p>");
                        }else{
                            echo("<p>No, that's not the correct number.</p>");
                        }
                    }
                ?>
            </article>
        </div>
    </body>
</html>

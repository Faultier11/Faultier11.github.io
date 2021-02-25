<html>  
        <head>
        </head>  
    
        <body>
            <form action="Password.php" method="GET">
                <p>
                <input type="Password" name="password" requierd> Password
                </p>

                <p>
                <input type="Submit">
                </p>
            </form>

            <?php
                $password = $_GET["password"];
                
                if($password = "Jonas")
                (
                    print ("<p>richtig</p>");
                )
                else
                (
                    print ("<p>falsch</p>");
                )
            ?>
        </body>  
    </html>  

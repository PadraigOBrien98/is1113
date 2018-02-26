<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <!-- Title -->
        <title>Receipt</title>
        
        <!-- Refer to the CSS stylesheets -->
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
    </head>
    
    <body>
        <nav>
            <div id ="menu">
                <ul>
                    <li>
                        <a href="homepage.html">Home</a>
                    </li>
                    <li>
                        <a href="cc.html">Cloud Services</a>
                    </li>
                        <li>
                            <a href="cv.html">Curriculum Vitae</a>
                            </li>
                            <li>
                                <a href="hover.html">Interests</a>
                            </li>
                            <li>
                                <a href="ebus1.php">E Business</a>
                            </li>
                </ul>
            </div>
        </nav>
        
            <h4>Receipt</h4>
        </div>
        <br/>
        <br/>

        <div id="main">
            <?php
            //Echo session variables that were set on previous page, Ebus2
            echo "Name: " . $_POST["name"] . "<br/>";
            echo "Email: " . $_POST["email"] . "<br/>";
            echo "Total Price: " . $_SESSION["total"] . "<br/>";
            ?>
        </div>
    </body>
    
</html>
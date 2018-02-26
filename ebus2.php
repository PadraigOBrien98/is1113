<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="ebus.css">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
        
        
        
        
        
        <div id="main">
        
        <h4>Payment Details</h4>
        
        
        <form action="ebus3.php" method="POST">

          <label for="name">

            <input type="text" id="name" name="name" placeholder="Name" value=""/>

          </label>

          </br>

          <label for="email">

            <input type="text" id="email" name="email" placeholder="Email" value=""/>

          </label>

          </br>

          <label for="user_pin">
                    
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
          </label>

          </br>
            
          
          
          </br>
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
          </form>
            
          <br/>
            
            
        <button id="btnValidate" onClick="validateDetails()" enabled>Validate</button>
          
            
        </div>
        
        <?php
        // Set session variables
        $_SESSION["total"] = $_POST["total"];
        $_SESSION["vat"] = $_POST["vat"];
        $_SESSION["discount"] = $_POST["discount"];
        $_SESSION["subtotal"] = $_POST["subtotal"];
        ?>
        
    </body>
</html>
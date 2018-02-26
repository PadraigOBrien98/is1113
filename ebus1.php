<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" type="text/css" href="ebus.css">
        
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
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              <label for="c9">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              <br/>
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              
              <label for="gmail">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br/>
              <br>
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br>
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              <br>
              <button onClick="calcSub()">Calculate Cost</button>
            
            </form>
          
            <br>
            <br/>
             <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
            </div>
    
    <div id="footer">
      <p>Created by Padraig O Brien (117462952)</p>
    </div>
    </body>
</html>
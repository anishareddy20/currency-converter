<!DOCTYPE html>
<html>
<head>
   <title> CURRENCY CONVERTER </title>
   <link rel="stylesheet" type="text/css" href="./cc.css"/>
</head>
<body>
   <h1> CURRENCY CONVERTER </h1>
   <form class="center" action="" method="post">
     <label for="from">FROM</label>
     <select name="from">
        <option value="usd">USD</option>
        <option value="euro">EURO</option>
     </select>
     <label for="to">TO</label>
     <select name="to">
       <option value="inr">INDIA</option>
       <option value="cad">CANADA</option>
     </select>
     <label for="in">ENTER AMOUNT</label>
     <input type="number" name="camount" required=""/>
     <input type="submit"  value="Convert" name="convert"/>
    </form>
<br /><br /><br />
</body>
</html>
<?php
    if(isset($_POST['convert'])){
         $from=$_POST['from'];
         $to=$_POST['to'];
         $amount=$_POST['camount'];
         if($from=='usd'){
                    if($to=='inr'){
                            $result=$amount*71.04;
                            echo '<div style="font-size:3em;color:black;font-weight:bold;">USD == INR<span style="font-size:1.5em;color:black;font-weight:bold;">'.$result.'</span></div>';
                            echo "<br>";
                            echo"1USD == 71.04 INR";
                            echo "<body style='background: url(http://luc.devroye.org/IndianRupee-2010-Small.jpg);'>";
                    }
                   else if ($to=='cad') {
                           $result=$amount*1.31;
                            echo '<div style="font-size:3em;color:black;font-weight:bold;">USD == CAD<span style="font-size:1.5em;color:black;font-weight:bold;">'.$result.'</span></div>';
                           echo "<br>";
                           echo"1USD == 1.31 CAD";
                           echo "<body style='background: url(https://st4.depositphotos.com/19189620/21112/v/450/depositphotos_211120350-stock-illustration-canadian-dollar-cad-currency-symbol.jpg);'>";
                   }
         }
         else if($from=='euro'){
                 if($to=='inr'){
                         $result=$amount*81.99;
                          echo '<div style="font-size:3em;color:black;font-weight:bold;">EURO == INR<span style="font-size:1.5em;color:black;font-weight:bold;">'.$result.'</span></div>';
                         echo "<br>";
                         echo"1EURO == 81.99 INR";
                         echo "<body style='background: url(http://luc.devroye.org/IndianRupee-2010-Small.jpg);'>";
                 }
                 else if($to=='cad'){
                         $result=$amount*1.50;
                          echo '<div style="font-size:3em;color:black;font-weight:bold;">EURO == CAD<span style="font-size:1.5em;color:black;font-weight:bold;">'.$result.'</span></div>';
                         echo "<br>";
                         echo"1EURO == 1.50 CAD";
                         echo "<body style='background: url(https://st4.depositphotos.com/19189620/21112/v/450/depositphotos_211120350-stock-illustration-canadian-dollar-cad-currency-symbol.jpg);'>";
                        }
                 }
        }
?>

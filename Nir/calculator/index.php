 <!DOCTYPE html>
 <html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
 </head>
 <body>
        <form action="<?php echo htmlspecialchars($_SERVER
        ["PHP_SELF"]);?>" method="post">
        <input type="number" name="num01" placeholder="Number one">
        <select name="operator" >
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="Number two">
        <button>calculate</button>
        </form>

        <?php
        

        if($_SERVER["REQUEST_METHOD"] == "POST")  {
           $num01 = $_POST["num01"];   
        }
        ?>
 </body>
 </html>
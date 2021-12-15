<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Number Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Random Number Generator</h1>

    <form action="" method="POST">

        <div id="amountSelector">
            <label for="amount">How many dices do you want to roll?</label><br>
            <input type="number" name="amount" id="amount" min="1" required>
        </div>
        <br>

        <label for="sides">Select how many sides the dice(s) has/have</label><br>
        <select name="sides" id="sides" required>
            <option value="">Select a side</option>
            <option value="4">D4</option>
            <option value="6">D6</option>
            <option value="8">D8</option>
            <option value="10">D10</option>
            <option value="12">D12</option>
            <option value="20">D20</option>
        </select>

        <br>

<!--         <button name="roll" id="btn">Roll the dices!</button>-->
        <input type="submit" name="submitbtn" id="btn" value="Roll the dices!"/>
    </form>
    <div>
        <?php
        if(isset($_POST['amount']) && isset($_POST['sides']) && isset($_POST['submitbtn'])){
            $amount=$_POST['amount'];
            $sides=$_POST['sides'];
            $total=0;
            $dices='Your dices are: ';

            for($i=1;$i<=$amount;$i++){
                $value=rand(1,$sides);
                $dices=$dices.$value.' ';
                $total+=$value;
            }
            ?>
                <h2><?=$dices?></h2>
            <h2>Result: <?=$total?></h2>
        <?php
        }
        ?>
    </div>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>
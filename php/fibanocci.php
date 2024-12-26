<!DOCTYPE html>
<html>
<head>
    <style>
        .output {
		
           
            padding: 30px;
            font-family: Arial, sans-serif;
	    color:white;
        }
    </style>
</head>
<body bgcolor="maroon">

<div class="output">
    <?php
    function fibonacciSeries($n) {
        $num1 = 0;
        $num2 = 1;
        echo "Fibonacci Series up to $n terms:<br><br>";
        for ($i = 0; $i < $n; $i++) {
            echo $num1 . " ";
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
        }
    }
    fibonacciSeries(20);
    ?>
</div>

</body>
</html>

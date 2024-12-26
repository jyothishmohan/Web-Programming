<!DOCTYPE html>
<html>
<head>
    <style>
        .output {
            padding: 30px;
            font-family: Arial, sans-serif;
            color: white;
        }
    </style>
</head>
<body bgcolor="maroon">
    <div class="output">
        <?php
        function factorial($n) {
            if ($n < 0) {
                return "Factorial is not defined for negative numbers.";
            } elseif ($n == 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        $number = 8; 
        $result = factorial($number);
        echo "The factorial of $number is $result";
        ?>
    </div>
</body>
</html>

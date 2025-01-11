<html>
<head>
    <title>Student Names</title>
    <style>
        body {
		background-color: #95b8d5;
            	font-family: Arial, sans-serif;
           	
        }
        pre {
            background-color: lightgrey;
           
        }
    </style>
</head>
<body>
    <h1>Student Names</h1>
    <?php
            $students = ["Jyothish","Mujeeb","Suraj","Somin","Lakshmi"];

            echo "<h2>Original Array</h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";

            asort($students);
            echo "<h2>Array Sorted with asort(): </h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";

            arsort($students);
            echo "<h2>Array Sorted with arsort(): </h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";
    ?>
</body>
</html>
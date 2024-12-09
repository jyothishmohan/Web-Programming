<head>
    <title>Student Names</title>
    <style>
        body {
		background-color: #95b8d5;
            	font-family: Arial, sans-serif;
           	margin: 20px;
        }
        pre {
            background-color: lightgrey;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
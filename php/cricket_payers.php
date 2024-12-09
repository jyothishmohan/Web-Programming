<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #95b8d5;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #eddcd2;
        }
        th, td {
            	border: 2px solid #3b3a30;
            	padding: 10px;
            	text-align: center;
        }
    </style>
</head>
<body>
    <h1>Indian Cricket Players</h1>
    <table>
        <tr>
            <th>Player Name</th>
        </tr>
        <?php
        $players = array(
	"Shubman Gill", "Harman preet kaur", "Rohit Sharma", "Virat Kohli", "Smrithi Mandana", "Hardik Pandya", "Suryakumar Yadav", "Jasprit Bumrah",
	"Mohammed shami","Yuvraj singh"
        );

        foreach ($players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
    </table>
</body>
</html>

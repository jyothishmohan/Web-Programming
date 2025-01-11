<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            text-align: center;
            font-size: larger;
            background-color: #9cadce;
        }
        .error {
            color: red;
        }
    </style>
    <title>Registration Form</title>
</head>
<body>
    <h1>REGISTRATION FORM</h1>

    <?php
    $fnameErr = $lnameErr = $usrnErr = $pwdErr = $cpwdErr = $genderErr = $mobErr = $emailErr = "";
    $fname = $lname = $usrn = $pwd = $cpwd = $gender = $mob = $address = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = test_input($_POST["fname"]);
        }

        if (empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        } else {
            $lname = test_input($_POST["lname"]);
        }

        if (empty($_POST["usrn"])) {
            $usrnErr = "Username is required";
        } else {
            $usrn = test_input($_POST["usrn"]);
        }

        if (empty($_POST["pwd"])) {
            $pwdErr = "Password is required";
        } else {
            $pwd = test_input($_POST["pwd"]);
        }

        if (empty($_POST["cpwd"])) {
            $cpwdErr = "Confirmation password is required";
        } else {
            $cpwd = test_input($_POST["cpwd"]);
            if ($pwd !== $cpwd) {
                $cpwdErr = "Passwords do not match";
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["mob"])) {
            $mobErr = "Mobile number is required";
        } else {
            $mob = test_input($_POST["mob"]);
            if (!preg_match("/^[0-9]{10}$/", $mob)) {
                $mobErr = "Invalid mobile number";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        $address = test_input($_POST["address"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend>Personal Details</legend>
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value="<?php echo $fname;?>">
            <span class="error">* <?php echo $fnameErr;?></span>
            <br><br>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value="<?php echo $lname;?>">
            <span class="error">* <?php echo $lnameErr;?></span>
            <br><br>
            <label for="usrn">Username:</label>
            <input type="text" id="usrn" name="usrn" value="<?php echo $usrn;?>">
            <span class="error">* <?php echo $usrnErr;?></span>
            <br><br>
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd">
            <span class="error">* <?php echo $pwdErr;?></span>
            <br><br>
            <label for="cpwd">Confirmation:</label>
            <input type="password" id="cpwd" name="cpwd">
            <span class="error">* <?php echo $cpwdErr;?></span>
            <br><br>
            <label for="gender">Gender:</label> 
            <input type="radio" id="male" name="gender" value="Male" <?php if (isset($gender) && $gender=="Male") echo "checked";?>> Male
            <input type="radio" id="female" name="gender" value="Female" <?php if (isset($gender) && $gender=="Female") echo "checked";?>> Female
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
        </fieldset>
        <fieldset>
            <legend>Contact Details</legend>
            <label for="mob">Mobile No:</label>
            <input type="text" id="mob" name="mob" maxlength="10" value="<?php echo $mob;?>">
            <span class="error">* <?php echo $mobErr;?></span>
            <br><br>
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="5" cols="15"><?php echo $address;?></textarea>
            <br><br>
            <label for="email">Email id:</label>
            <input type="email" id="email" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
        </fieldset>
        <br>
        <input type="submit" value="SUBMIT">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($fnameErr) && empty($lnameErr) && empty($usrnErr) && empty($pwdErr) && empty($cpwdErr) && empty($genderErr) && empty($mobErr) && empty($emailErr)) {
        echo "<h2>Your Input:</h2>";
        echo "First Name: " . $fname . "<br>";
        echo "Last Name: " . $lname . "<br>";
        echo "Username: " . $usrn . "<br>";
        echo "Password: " . str_repeat('*', strlen($pwd)) . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Mobile No: " . $mob . "<br>";
        echo "Address: " . $address . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>

</body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <style>
            .error{
                color:red;
            }
        </style>
    </head>
    <body>
        <?php
            $name = $email = $date = $gender = $degree = $blood = "";
            $nameErr = $emailErr = $dateErr = $genderErr = $degreeErr = $bloodErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                  } 
                  elseif(str_word_count($_POST["name"])<2){
                    $nameErr = "Name needs to have two words";
                  }
                  else {
                    $name = $_POST["name"];
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                      $nameErr = "Only letters and white space allowed";
                    }
                  }
                  if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } else {
                    $email = $_POST["email"];
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "Invalid email format";
                    }
                  }
                  if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                  } else {
                    $gender = $_POST["gender"];
                  }
            }
        ?>
        <h2>
            Designing HTML form using PHP with validation of user inputs
        </h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error"> <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error"> <?php echo $emailErr;?></span>
            <br><br>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
            <span class="error"><?php echo $genderErr;?></span>
            <br><br>
            Date of Birth:
            <select name="dd">
            <option value="">Select date</option>
            <?php for ($i = 1; $i <= 31; $i++) : ?>
            <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
            </select>
            <select name="mm">
            <option value="">Select month</option>
            <?php for ($i = 1; $i <= 12; $i++) : ?>
            <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
            </select>
            <select name="yy">
            <option value="">Select year</option>
            <?php for ($i = 1953; $i < 1999; $i++) : ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
            </select>
        </form>
    </body>
</html>

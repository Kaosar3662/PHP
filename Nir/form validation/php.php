<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = clean($_POST["name"]);
    $email = clean($_POST["email"]);
    $number = clean($_POST["number"]);
    $age = clean($_POST["age"]);
    $address = clean($_POST["address"]);

    switch (true) {
        case (strlen($name) < 3 || strlen($name) > 30):
            echo "<p style='color:red;text-align:center;'>❌ Name must be 3–30 characters.</p>";
            break;
        case (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            echo "<p style='color:red;text-align:center;'>❌ Invalid email format.</p>";
            break;
        case (!preg_match("/^[0-9]{11}$/", $number)):
            echo "<p style='color:red;text-align:center;'>❌ Phone must be 11 digits.</p>";
            break;
        case ($age < 1 || $age > 120):
            echo "<p style='color:red;text-align:center;'>❌ Age must be between 1–120.</p>";
            break;
        case (strlen($address) > 150):
            echo "<p style='color:red;text-align:center;'>❌ Address too long (max 150 chars).</p>";
            break;
        default:
            echo "<p style='color:green;text-align:center;'>✅ Form submitted successfully!</p>";
            echo "<div style='text-align:center;'>
                <b>Name:</b> $name<br>
                <b>Email:</b> $email<br>
                <b>Age:</b> $age<br>
                <b>Phone Number :</b> $number<br>
                <b>Address:</b> $address
              </div>";
            break;
    }
}

function clean($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

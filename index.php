<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body {
            background-color: #f1f8f6;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #fff;
            padding: 35px;
            border: 2px solid #2e8b57;
            border-radius: 10px;
            width: 100%;
            max-width: 460px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 6px;
            margin-bottom: 14px;
        }
        label {
            font-weight: 500;
            color: #2e8b57;
        }
        button {
            background: #2e8b57;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }
        button:hover {
            background: #246b45;
        }
    </style>
</head>
<body>

<form action="php.php" method="POST">
    <h2 style="text-align:center;color:#2e8b57;">Registration</h2>
    <label>Name</label>
    <input type="text" name="name" placeholder="Inter your name">
    <label>Email</label>
    <input type="email" name="email" placeholder="Inter your email">
    <label>Age</label>
    <input type="number" name="age" placeholder="Inter your age">
    <label>Phone Number</label>
    <input type="number" name="number" placeholder="Inter your phone number">
    <label>Address</label>
    <textarea name="address" placeholder="Inter your address"></textarea>
    <button type="submit">Register</button>
</form>

</body>
</html>
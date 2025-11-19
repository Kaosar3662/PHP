<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    form {
      background: #fff;
      padding: 30px 40px;
      border: solid 1px #000;
      border-radius: 8px;
      width: 100%;
      max-width: 520px;
    }

    form input,
    form textarea {
      min-width: 100%;
      padding: 10px;
      margin: 8px 0 16px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;

    }

    form textarea {
      min-height: 130px;
      min-width: 100%;
      max-width: 100%;

    }

    form button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      font-size: 15px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .back-btn {
      display: flex;
      padding: 8px 14px;
      background-color: #6c757d;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
      margin-bottom: 20px;
    }

    .back-btn:hover {
      background-color: #5a6268;
    }
  </style>
</head>

<body>

  <form action="Validation.php" method="POST">

    <a href="index.php" class="back-btn">Back</a>
    
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
    </div>
    <div>
      <label for="email">E-mail:</label>
      <input type="text" name="email" id="email">
    </div>
    <div>
      <label for="number">Phone:</label>
      <input type="number" name="phone" id="number">
    </div>
    <div>
      <label for="age">Age:</label>
      <input type="number" name="age" id="age">
    </div>
    <div>
      <label for="address">Address:</label>
      <textarea name="address" id="address"></textarea>
    </div>
    <button type="submit">Submit</button>
  </form>

</body>

</html>
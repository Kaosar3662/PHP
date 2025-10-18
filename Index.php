<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testing</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <style>
    * {
      box-sizing: border-box;
      margin: 0px;
      padding: 0px;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px;
      min-height: 100vh;
      background-color: rgba(234, 234, 234, 1);
    }

    input,
    button,
    select,
    .empty {
      padding: 8px 12px;
      cursor: pointer;
      width: 100%;
    }

    button {
      background: yellow;
    }

    .imgholder,
    label {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 30px;
    }

    .inputFieldContainer input,
    .popup button {
      width: 100%;
    }

    .inputFieldContainer {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }
  </style>
</head>

<body>
  <form action="form_landing.php" method="post" id="myForm">
    <div class="inputFieldContainer">
      <div class="nameField">
        <div class="form_control">
          <label for="fName">Full Name:</label>
          <input type="text" name="name" id="fName" required />
        </div>
      </div>

      <div class="form_control">
        <label for="email">Email:</label>
        <input type="email" name="mail" id="email" required />
      </div>

      <div class="form_control">
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required />
      </div>
      <footer>
        <button form="myForm" name="submit" class="submitBtn">Submit</button>
      </footer>
    </div>
  </form>
</body>

</html>
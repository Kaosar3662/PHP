<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .header h2 {
      margin: 0;
    }

    .add-btn {
      padding: 10px 14px;
      background: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }

    table th,
    table td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }

    table th {
      background: #eee;
    }
  </style>

</head>



<body>

  <div class="header">
    <h2>Admin Table</h2>
    <a href="AddForm.php" class="add-btn">Add</a>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Age</th>
      <th>Address</th>
      <th>Actions</th>
    </tr>

    <?php
    require_once("Connection.php");
    $sql = "SELECT * FROM Users";
    $fetchAll = $connection->query($sql);
    $data = [];

    if ($fetchAll && $fetchAll->num_rows > 0) {
      $data = $fetchAll->fetch_all(MYSQLI_ASSOC);
    }

    if (!empty($data)) {
      foreach ($data as $row) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['age']}</td>
                <td>{$row['address']}</td>
                <td>
                  <a href='EditForm.php?id={$row['id']}'>Edit</a> |
                  <a href='Delete.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='7'>No records found</td></tr>";
    }
    ?>


  </table>

</body>

</html>
<?php
$conn = new mysqli("my-db.cozka4i8kv1n.us-east-1.rds.amazonaws.com", "admin", "priyanka", "mydb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My DevOps App</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            margin: 50px auto;
            width: 60%;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background: #4facfe;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background: #4facfe;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>🚀 My DevOps Application version 1.0</h1>
    <h3>User List</h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>

        <?php
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No data found</td></tr>";
        }
        ?>
    </table>

    <a href="index.html" class="btn">➕ Add New User</a>
</div>

</body>
</html>

<?php
$conn->close();
?>

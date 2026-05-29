<?php include 'dbconnection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Students</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #444;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        a.button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a.button.delete {
            background-color: red;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center;">Student Records</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>

        <?php
        $query = "SELECT * FROM  learners";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['firstname']}</td>
                    <td>{$row['lastname']}</td>
                    <td>{$row['age']}</td>
                    <td>
                        <a class='button' href='edit.php?id={$row['id']}'>Edit</a>
                        <a class='button delete' href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </td>
                  </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found.</td></tr>";
        }
        ?>
    </table>

</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>User List</h2>
        <a href="save_user.php">add user</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $pdo = new PDO('mysql:host=localhost;dbname=kshitij', 'root', '');

                // Fetch user data from the database
                $stmt = $pdo->prepare('SELECT * FROM name');
                $stmt->execute();
                $users=$stmt->fetchAll();
                foreach ($users as $user) {
                    echo '<tr>';
                    echo '<td>' . $user['name'] . '</td>';
                    echo '<td>' . $user['gender'] . '</td>';
                    echo '<td>' . $user['city'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

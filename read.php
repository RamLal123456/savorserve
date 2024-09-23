<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
        include 'config/dbconnect.php';
        $query = "Select * from user";
        $data = mysqli_query($con,$query);
        if(mysqli_num_rows($data) > 0){
            while($row = mysqli_fetch_assoc($data)){
                ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['phone']?></td>
            <td><?=$row['password']?></td>
            <td><a href="update.php?id=<?=$row['id']?>">Edit</a><a href="delete.php?id=<?=$row['id']?>">Delete</a></td>
        </tr>
        <?php
        }
        }
        ?>
    </table>
</body>
</html>
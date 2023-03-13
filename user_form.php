<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include('./save.php'); ?>
    <div class="container mt-5">
        <form action="save.php" method="post" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="user_name" class="form-control"></td>
                    <th>Email</th>
                    <td><input type="email" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password" class="form-control"></td>
                    <th>Photo</th>
                    <td><input type="file" name="photo" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="6">
                        <input type="submit" class="btn btn-block btn-success" value="Save">
                    </td>
                </tr>
            </table>
        </form>
        </table>



</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="text" name="name">
        </label> <br>
        <label for="email>
            Name: <input type="email" name="email">
        </label> <br>
        <label for="date">Date Of Birth</label><br>
            Name: <input type="date" name="date">
        <label for="gender">Gender</label><br>
            <select name="gender">
                <option value="">Please select...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">other</option>
            </select>
            <label for="country">
            Name: <input type="text" name="country">
        </label>
            <button type="submit">Submit</submit>
    </form>

HELLO: <?php
print_r($_POST);
</body>
</html>

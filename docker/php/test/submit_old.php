<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Form</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Name: <input type = “text” name =“Name“ placeholder="StoneSwamp"></label><br/>
        <label>Age: <input type = “text” name =“Age“ placeholder="58"></label><br/>
        <label>Hire Date: <input type = “text” name =“HireDate“ placeholder="2018-06-28T00:00:00"></label><br/>
    </form>
</body>
</html>
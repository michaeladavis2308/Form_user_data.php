<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <form  action= "user_data.php" method="post">

        <label for="name">Name:

            <input type="text" name="name">
    
        </label>
    
        <br>

        <br>
        <label for="email">Email:
    
            <input type="email" name="email">
    
        </label>
    
        <br>

        <br>
        <label for="dateofbirth">Date of Birth:
    
            <input type="date" name="dateofbirth">
    
        </label>

        <br>

        <br>

        <label for="gender">Gender:
    
            <input type="radio" name="gender">Male
            <input type="radio" name="gender">Female
    
        </label>

        <br>

        <br>
        <label for="country">Country:
    
            <input type="text" name="country">
        </label>

        <br>

        <br>
    
        <button type="submit">Submit</button>
    
    </form>

 <?php
    print_r($_GET)
   ?>
</body>
</html>
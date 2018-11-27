!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to DevOps on AWS!</title>
</head>
<body>
    <?php
        require 'Welcome.php';
        $welcome = new Welcome();
    ?>
    <h1> <?php echo $welcome->greet(); ?></h1>
</body>
</html

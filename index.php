<?php
 include 'pure_index.php'
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Hello World!</H1>
    <?php echo "<H1>HEHEHEEHE TUTOK MO YUNG CAMERA KAY UNCLE DAGS.</H1>";
    ?>

    <h3>
        username: <u><?php echo $username ?></u>
        <Br>
        <a href="next_page"> Go To Next Page</a>
        <Br>
        UserID: <u><?php echo $user_id; ?></u>
    <h3>

    <button type="button" onclick="greetUser()">Greet User</button>    
    <script>
        const username = "<?php echo $username ?>";  
        const userID = "<?php echo $user_id; ?>";
        const name = "<?php echo $name; ?>";
        const age = "<?php echo $age; ?>";
        const sex = "<?php echo $sex; ?>";

        function greetUser(){
            alert("Hello "+username+ ". Your User ID is "+userID);
        }
    </script>
</body>
</html>
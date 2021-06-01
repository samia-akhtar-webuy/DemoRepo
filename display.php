
<?php 


include 'connection.php';

$selectquery = "select * from userdata";

$query = mysqli_query($con,$selectquery);

$num = mysqli_num_rows($query);




// echo $num;
// echo $res[2];
while($res = mysqli_fetch_array($query)){
    echo $res['name'] . "<br>";
}


?>

<!DOCTYPE html>

<html>
    <head>

        <title></title>
        <?php include 'links.php'; ?>
        <?php include 'styles.php'; ?>
       
    </head>
    <body>
    <div class="main-div">
        <h1>List of important people</h1>

    </div>
    
    </body>
</html>
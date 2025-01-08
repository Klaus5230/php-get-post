
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer src="./js/mains.js"></script>
    <link rel="stylesheet" href="../css/mains.css" />
    <title>Get and Post</title>
</head>
<body >

<h1>Web Form Processor</h1> 
<?php
if(isset($_POST['first']) && isset($_POST['last'])){
    echo '<pre>';
    echo "Post Method Submitted to anotherPage.php","<br>", htmlspecialchars(print_r($_POST, true));
    $firstname = $_POST['first'];
    $lastname= $_POST['last'];
    if(!empty($firstname)&& !empty($lastname)){
            echo htmlspecialchars($firstname)," ",htmlspecialchars($lastname);
    } else{
            echo "Missing Required data.";
    }
} elseif (isset($_GET['first']) && isset($_GET['last'])){
    echo '<pre>';
    echo "GET Method Submitted to anotherPage.php","<br>",htmlspecialchars(print_r($_GET, true));
    $firstname = $_GET['first'];
    $lastname= $_GET['last'];
    if(!empty($firstname)&& !empty($lastname)){
            echo htmlspecialchars($firstname)," ",htmlspecialchars($lastname);
    } else{
            echo "Missing Required data.";
    } 
} else{
    echo "not set";
}

?>
<p>  <a href=".">Return to Form Page</a> </p>

</body>
</html>
<?php
// $firstname = $_POST['first'];
// $lastname= $_POST['last'];
// echo $firstname," ",$lastname;
// echo htmlspecialchars($_POST['first'])," ", htmlspecialchars($_POST['last']); #converts any html chars to a string
// //using a filter to convert special characters
// $firstname1 = filter_input(INPUT_POST,'first',FILTER_UNSAFE_RAW);
// $lastname1 = filter_input(INPUT_POST,'last',FILTER_UNSAFE_RAW);
// echo $firstname," ",$lastname;
// if(!empty($firstname)&& !empty($lastname)){
//     echo $firstname," ",$lastname;
// } else{
//     echo "Missing Required data.";
// }

//Alternate way to do the above 

if(isset($_POST['first']) && isset($_POST['last'])){
    echo '<pre>';
    echo "Post Method Submitted ",htmlspecialchars(print_r($_POST, true));
    $firstname = $_POST['first'];
    $lastname= $_POST['last'];
    if(!empty($firstname)&& !empty($lastname)){
            echo htmlspecialchars($firstname)," ",htmlspecialchars($lastname);
    } else{
            echo "Missing Required data.";
    }
} elseif (isset($_GET['first']) && isset($_GET['last'])){
    echo '<pre>';
    echo "GET Method Submitted ",htmlspecialchars(print_r($_GET, true));
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script defer src="./js/mains.js"></script> -->
    <link rel="stylesheet" href="./css/mains.css" />
    <title>Get and Post</title>
</head>
<body >

<!-- all form actions below will point to the same page as where the form is in 
Normally, the action attribute in a form specifies where the data should go to, for example a processing file: action="proces.php".
Sometimes, action="#" or action="." or action="" or action="Same Page" is used to reload the page and process the data on the same page.
Basically, it just submits the form to the same page.

-->
<h1>Web Form Processor</h1> 
<!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get"> -->
<form action="." method="get">
<!-- <form action="#" method="get"> -->
<!-- <form action="Same Page" method="get"> -->
<!-- <form action="myTestDir/anotherPage.php" method="get"> -->
<!-- <form action="http://klaus-calc.onrender.com/index.php" method="get"> -->

<label for="first">First Name:</label> 
<input type="text" id="first" name="first" autocomplete="off">
<label for="last">Last Name:</label> 
<input type="text" id="last" name="last" autocomplete="off">
<div class="buttons">
    <button type="submit">Submit</button>
    <button type="submit" formmethod="post">Submit Post</button>
    <button type="reset">Reset</button>
</div>
</form>
</body>
</html>
<?php
require_once "config.php";

$news_id = $_GET['id'];

$userQuery = "Delete from news where news_id = '$news_id'";

$result = mysqli_query($connect,$userQuery);

if(!$result){
    die("Could not sucessfully run the query $userQuery".mysqli_error($connect)); 
}
else{
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <form action="news-login.php" class="submit-form">
            Delete Complete
            <div class="button">
            <input type="submit" value="back" class="submit">
            </div> 
        </form>    
    </body>
</html>
<?php
}
?>
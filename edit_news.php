<?php
require_once "config.php";

$news_id = $_GET['id'];

$userQuery = "Select * from news where news_id = '$news_id'";

$result = mysqli_query($connect,$userQuery);

if(!$result){
    die("Could not sucessfully run the query $userQuery".mysqli_error($connect)); 
}

else{
    while ($row = mysqli_fetch_assoc($result)){
    ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <form name="form1" method="post" class="edit-form" action="edit_news_submit.php?id=<?php echo $news_id;?>">
            <a href="news-login.php">
            <div class="close">
                <td>x</td>
            </div>
            </a>
            <table>
                <tr>
                    <td class="header-add-news"><h1>Edit news</h1></td>
                </tr>
                <tr>
                    <td>Topic News</td>
                    <td><input type="text" name="news_title" id="news_title" value="<?php echo $row['news_title']?>"></td>
                </tr>
                <tr>
                    <td>News Description</td>
                    <td><textarea name="news_message" id="news_message" style="width: 173px"; value="<?php echo $row['news_message']?>"><?php echo $row['news_message']?></textarea></td>
                </tr>

            </table>
            <div class="button">
                <input class="submit" type="submit" value="Submit" >
                <input class="reset" type="reset" value="Reset" >
            </div>
        </form>
    </body>
</html>
<?php 
    }
}
?>
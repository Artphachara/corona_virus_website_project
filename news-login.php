<?php
    require_once "config.php";

    $userQuery = "SELECT * FROM news";
    $result = mysqli_query($connect,$userQuery);

    if(!$result){
        die("Could not sucessfully run the query $userQuery".mysqli_error($connect));
    }
    if(mysqli_num_rows($result) == 0){
        echo "No records were found with query $user_query";
    }
    else{
?>
<html>
    <head>
        <title>New releases</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <div class="header">
            <div class="navigator">
                <div class="nav">
                    <ul>
                        <li><a href="knowledge-login.html">Knowledge</a></li>
                        <li><a href="news-login.php" style="color: #3498DB; border-bottom: 3px solid #3498DB;">News</a></li>
                        <li><a href="home-login.php">Home</a></li>
                    </ul>
                </div>
            </div>
            <div class="head-logo">
                <div class="head-logo">
                    <div class="logo">
                        <a href="home-login.php"><img src="images/header-logo.png" height="150"></a>
                    </div>  
                </div>     
            </div>       
        </div>
        <div class="home-news">
            <div class="heading-news3">
                News
                <a href="add_news_form.php">
                    <div class="add">
                        Add
                    </div>
                </a>
            </div>
            <div class="display-news">
                <?php while($row = mysqli_fetch_assoc($result)){?>

                    <?php echo '<div class="news-box-flex">';?>

                        <?php echo '<div class="news-box">';?>
                            <?php echo '<div class="head-title">'
                                .$row['news_title'].
                            '</div>';?>
                            <?php echo '<div class="news-description">'
                                .$row['news_message'].
                            '</div>';?> 
                        <?php echo '</div>';?>
                        
                        <?php echo '<div class="setting">';?>
                            <?php echo "<a href=\"edit_news.php?id=".$row['news_id']."\">";?>
                                <?php echo '<div class="edit-news">'
                                .'Edit'.
                                '</div>';?>
                            <?php echo '</a>';?>
                            <?php echo "<a href=\"delete_news.php?id=".$row['news_id']."\">";?>
                            <?php echo '<div class="delete-news">'
                                .'Delete'.
                            '</div>';?>
                            <?php echo '</a>';?>
                        <?php echo '</div>';?>

                    <?php echo '</div>';?>

                <?php
                }
                ?>
            </div>                 
        </div>
        <div class="footer">
            <div class="upper-footer">
                <div class="upper-footer">
                </div>
            </div>
            <div class="lower-footer">
                &copy; 2020 PROJECT
                <div class="login">
                    <a href="home.php">Logout</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    mysqli_close($connect);
    }
?>
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
                        <li><a href="knowledge.html">Knowledge</a></li>
                        <li><a href="news.php" style="color: #3498DB; border-bottom: 3px solid #3498DB;">News</a></li>
                        <li><a href="home.php">Home</a></li>
                    </ul>
                </div>
            </div>
            <div class="head-logo">
                <div class="head-logo">
                    <div class="logo">
                        <a href="home.php"><img src="images/header-logo.png" height="150"></a>
                    </div>   
                </div>     
            </div>      
        </div>
        <div class="home-news">
            <div class="heading-news3">
                News
                <a href="add-news-form.php">
                    <div class="add">
                        Add
                    </div>
                </a>
            </div>
            <div class="display-news">
                <?php while($row = mysqli_fetch_assoc($result)){?>
                    <?php echo '<div class="news-box">';?>
                        <?php echo '<div class="head-title">'
                            .$row['news_title'].
                        '</div>';?>
                        <?php echo '<div class="news-description">'
                            .$row['news_message'].
                        '</div>';?>
                    <?php echo '</div>';?>  
                <?php
                }
                ?>
            </div>                 
        </div>
        <div class="login-website">
            <a href="news.php">
                <div class="close">
                    <td>x</td>
                </div>
                </a>
            <h1>Login your account</h1>
            <form action="login-check.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login">
            </form>
        </div>               
        <div class="info-2">
            <p class="heading">Coronavirus disease (COVID-19)</p>
            <div class="description-info">
                <p>
                    Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
                    <br>
                    <br>
                    The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.
                    <br>
                    <br>
                    How it spreads
                    <br>
                    <br>
                    Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth.
                </p>
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
                <a href="login-check.php">Login</a>
            </div>
            </div>
        </div>
    </body>
</html>
<?php
    mysqli_close($connect);
    }
?>
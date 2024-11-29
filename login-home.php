<?php
    session_start();
    require_once "config.php";

    $userQuery = "SELECT SUM(confirmed_cases_covid),SUM(confirmed_treatment),SUM(confirmed_recoveries),SUM(confirmed_deaths) FROM country";
    $result = mysqli_query($connect,$userQuery);
    $_SESSION['time'] = "9 April 03:00 GMT+7";

    if(!$result){
        die("Could not sucessfully run the query $userQuery".mysqli_error($connect)); 
    }

    else{
        while ($row = mysqli_fetch_assoc($result)){
        ?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>        
        <div class="header">
            <div class="navigator">
                <div class="nav">
                    <ul>
                        <li><a href="knowledge.html">Knowledge</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="home.php" style="color: #3498DB; border-bottom: 3px solid #3498DB;">Home</a></li>
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
        <div class="main-content">
        <div class="content">
                <div class="head-content">
                    Coronavirus disease (COVID-19) outbreak situation
                </div>
                <div class="situation-content">
                    <div class="cases-confirmed">
                        <div class="row-number">
                            <?php echo $row['SUM(confirmed_cases_covid)']?>
                        </div>
                        <div class="row-confirmed">
                            Confirmed cases
                        </div>
                        <div class="row-time">
                            Updated: <?php echo $_SESSION['time'];?>
                        </div>
                    </div>
                    <div class="treatment">
                        <div class="row-number">
                            <?php echo $row['SUM(confirmed_treatment)']?>
                        </div>
                        <div class="row-confirmed">
                            Confirmed treatment in hospital
                        </div>
                        <div class="row-time">
                            Updated: <?php echo $_SESSION['time'];?>
                        </div>            
                    </div>

                    <div class="recoveries">
                        <div class="row-number">
                            <?php echo $row['SUM(confirmed_recoveries)']?>
                        </div>
                        <div class="row-confirmed">
                            Confirmed recoveries
                        </div>  
                        <div class="row-time">
                            Updated: <?php echo $_SESSION['time'];?>
                        </div>
                    </div>
                    
                    <div class="deaths">
                        <div class="row-number">
                            <?php echo $row['SUM(confirmed_deaths)']?>
                        </div>
                        <div class="row-confirmed">
                            Confirmed deaths
                        </div>  
                        <div class="row-time">
                            Updated: <?php echo $_SESSION['time'];?>
                        </div>
                    </div>
                </div>           
            </div>
        <div class="videos">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/1APwq1df6Mw" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="description-video">
                Basic protective measures against the new coronavirus
                <p>
                    <br>
                    Stay aware of the latest information on the COVID-19 outbreak, available on the WHO 
                    <br>
                    website and through your national and local public health authority. 
                    <br>
                    Most people who become infected experience mild illness and recover, but it can be more  
                    <br>
                    severe for others. Take care of your health and protect others by doing the following:
                    <br>
                    <br>
                    <a href="protect.html">see all</a>
                </p>
            </div>
        </div>
        <div class="home-news">
            <div class="heading-news">
                News
                <div class="all-news">
                    <a href="news.php">All <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="box-news">
                <a href="" target="_blank">
                    <img src="images/kicking-corona.png" height="360" width="430" border="0">
                    <div class="text-underline">
                        Pass the message: Five steps to kicking out coronavirus
                    </div>
                </a>
                <a href="" target="_blank">
                    <img src="images/COVID-19.png" height="360" width="430" border="0">
                    <div class="text-underline">
                        WHO, UN Foundation and partners launch first-of-its-kind COVID-19 Solidarity Response Fund
                    </div>
                </a>
                <a href="" target="_blank">
                    <img src="images/boy-and-girl.png" height="360" width="430" border="0">
                    <div class="text-underline">
                        COVID-19: IFRC, UNICEF and WHO issue guidance to protect children and support safe school operations
                    </div>
                </a>
            </div>
            <div class="protect-news">
                <div class="heading-news2">
                    What you need to know
                </div>
                <div class="box-protect-news">
                    <table>
                        <tr>
                            <td><a href="coronavirus.html" target="_blank">What is a coronavirus? <i class="fas fa-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                            <td><a href="how-to-protect.html">How to protect yourself <i class="fas fa-arrow-right"></i></a></td>
                        </tr>
                        <tr>
                            <td><a href="how-to-protect.html">Q&A on coronaviruses (COVID-19) <i class="fas fa-arrow-right"></i></a></td>
                        </tr>  
                    </table>
                </div>
            </div>                      
        </div>
        <div class="info">
            <p class="heading">Summary</p>
            <div class="description-info">
                <p>
                    A pneumonia of unknown cause detected in Wuhan, China was first reported to the WHO Country Office in China on 31 December 2019.
                    <br>
                    <br>
                    WHO is working 24/7 to analyse data, provide advice, coordinate with partners, help countries prepare, increase supplies and manage expert networks.
                    <br>
                    <br>
                    The outbreak was declared a Public Health Emergency of International Concern on 30 January 2020.
                    <br>
                    <br>
                    The international community has asked for US$675 million to help protect states with weaker health systems as part of its Strategic Preparedness and Response Plan.
                    <br>
                    <br>
                    On 11 February 2020, WHO announced a name for the new coronavirus disease: COVID-19."
                    <br>
                    <br>
                    To stay up to date, follow <a target="_blank" href="https://twitter.com/DrTedros">@DrTedros</a> and <a target="_blank" href="https://twitter.com/who">@WHO</a> on Twitter
            </div>
        </div>
        <div class="login-website">
            <a href="home.php">
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
        }
    }
?>
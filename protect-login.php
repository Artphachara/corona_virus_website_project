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
        <title>Coronavirus</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <div class="header">
            <div class="navigator">
                <div class="nav">
                    <ul>
                        <li><a href="knowledge-login.html">Knowledge</a></li>
                        <li><a href="news-login.html">News</a></li>
                        <li><a href="home-login.php" style="color: #3498DB; border-bottom: 3px solid #3498DB;">Home</a></li>
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
                        <div class="information-protect">
                            <div class="information">
                                <div class="topic-information">
                                    Wash your hands frequently
                                </div>
                                <div class="information-description">
                                    Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.
                                </div>
                                <div class="cause">
                                    <bold>Why?</bold> Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.
                                </div>
                                <br>
                            </div>
                            <div class="information">
                                <div class="topic-information">
                                    Maintain social distancing
                                </div>
                                <div class="information-description">
                                    Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.
                                </div>
                                <div class="cause">
                                    <bold>Why?</bold> When someone coughs or sneezes they spray small liquid droplets from their nose or mouth which may contain virus. If you are too close, you can breathe in the droplets, including the COVID-19 virus if the person coughing has the disease.
                                </div>
                                <br>
                            </div>
                            <div class="information">
                                <div class="topic-information">
                                    Avoid touching eyes, nose and mouth
                                </div>
                                <div class="information-description">
                                </div>
                                <div class="cause">
                                    <bold>Why?</bold> Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose or mouth. From there, the virus can enter your body and can make you sick.
                                </div>
                                <br>
                            </div>
                            <div class="information">
                                <div class="topic-information">
                                    Practice respiratory hygiene
                                </div>
                                <div class="information-description">
                                    Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately.
                                </div>
                                <div class="cause">
                                    <bold>Why?</bold> Droplets spread virus. By following good respiratory hygiene you protect the people around you from viruses such as cold, flu and COVID-19.
                                </div>
                                <br>
                            </div>
                            <div class="information">
                                <div class="topic-information">
                                    If you have fever, cough and difficulty breathing, seek medical care early
                                </div>
                                <div class="information-description">
                                    Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention and call in advance. Follow the directions of your local health authority.
                                </div>
                                <div class="cause">
                                    <bold>Why?</bold> National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.
                                </div>
                                <br>
                            </div>
                            <div class="information">
                                <div class="topic-information">
                                    Stay informed and follow advice given by your healthcare provider
                                </div>
                                <div class="information-description">
                                    Stay informed on the latest developments about COVID-19. Follow advice given by your healthcare provider, your national and local public health authority or your employer on how to protect yourself and others from COVID-19.
                                </div>
                                <div class="cause">
                                    <bold>Why?</bold> National and local authorities will have the most up to date information on whether COVID-19 is spreading in your area. They are best placed to advise on what people in your area should be doing to protect themselves.
                                </div>
                                <br>
                                <div class="back-how-to-protect">
                                    <a href="home-login.php" style="color:#3498DB"><i class="fas fa-arrow-left"></i> back</a>
                                </div> 
                                <br>
                            </div>        
                        </div>
                    </p>
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
                    To stay up to date, follow <a target="_blank" href="https://twitter.com/DrTedros">@DrTedros</a> and <a target="_blank" href="https://twitter.com/who">@WHO</a> on Twitter</p>
            </div>
        </div>
        <div class="footer">
            <div class="upper-footer">
                <div class="upper-footer">
                </div>
            </div>
            <div class="lower-footer">
                &copy; 2020 PROJECT 
            </div>
        </div>
    </body>
</html>
<?php
        }
    }
?>
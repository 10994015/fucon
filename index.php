<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>復康愛接送</title>
    <link rel="shortcut icon" href="./images/logo3.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="./css/app.css">
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    
    <div id="totop">
        <a href="#"><i class="fa-solid fa-chevron-up"></i></a>
    </div>
    <header id="header">
        <a href="./" class="logo"><img src="./images/logo.png" alt=""></a>
        <nav id="nav">
            <a href="./web/toll.php">收費標準</a>
            <a href="./">輪椅接送</a>
            <a href="./">爬梯服務</a>
            <a href="./web/travel.php">包車旅遊</a>
            <a href="./web/reserve.php" class="md-contact">立即預約</a>
            <a href="./web/reserve.php" class="contact">立即預約</a>
        </nav>
        <i class="fas fa-bars" id="menu-bar"></i>
    </header>
    <div id="loading">
        <div class="imgbox">
        </div>
        <img src="./images/logo3.png" width='100' alt="">
    </div>
    <section class="banner">
        <div class="text">
            <h1 >復康<span>愛</span>接送&nbsp;</h1>
            <h2 data-text="barrier free transportation service&nbsp;">barrier free transportation service</h2>
        </div>
    </section>

    <section class="infomation">
        <div class="item">
            <i class="fa-solid fa-phone"></i>
            <div>
                <p class="servicename">電話諮詢</p>
                <P>0900000000</P>
            </div>
        </div>
        <div class="item">
            <i class="fa-solid fa-clock"></i>
            <div>
                <p class="servicename">服務時間</p>
                <P>AM 08:00 - PM 08:00</P>
            </div>
        </div>
        <div class="item">
            <i class="fa-solid fa-location-dot"></i>
            <div>
                <p class="servicename">服務地址</p>
                <P>桃園市龍潭區龍潭街110號</P>
            </div>
        </div>
    </section>

    <section class="about">
        <h2 class="title">我們的服務</h2>
        <p class="e-title">What We Can Do For You</p>
        <div class="content">
            <div class="item">
                <img src="./images/banner.png" alt="">
                <h3>輪椅接送</h3>
                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                <a href="#">查看更多</a>
            </div>
            <div class="item">
                <img src="./images/banner.png" alt="">
                <h3>爬梯服務</h3>
                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                <a href="#">查看更多</a>
            </div>
            <div class="item">
                <img src="./images/banner.png" alt="">
                <h3>包車旅遊</h3>
                <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                <a href="#">查看更多</a>
            </div>
        </div>
    </section>

    <section class="about-company">
        <h2 class="title">團隊成員</h2>
        <p class="small-title">復康愛接送均為經專業訓練且取得合格認證之司機，以耐心與專業協助輪椅之行動不便者或行動遲緩之長輩上下車，獲得許多客戶口碑推薦！</p>
        <div class="teams">
            <div class="team">
                <img src="./images/team1.png" alt="">
                <div class="info">
                大台北地區<br>
                陳志偉 #6985<br>
                電話 0900 000 000
                </div>
            </div>
            <div class="team">
                <img src="./images/team2.png" alt="">
                <div class="info">
                大台北地區<br>
                陳志偉 #6985<br>
                電話 0900 000 000
                </div>
            </div>
            <div class="team">
                <img src="./images/team3.png" alt="">
                <div class="info">
                    大台北地區<br>
                    陳志偉 #6985<br>
                    電話 0900 000 000
                </div>
            </div>
        </div>
        <a href="#">查看更多詳細資訊</a>
    </section>

    <section class="comment">
        <div class="text">
            <h3>客戶評價</h3>
            <p>我們的客戶怎麼說！</p>
            <div class="commentlist">
                <div class="item">
                    <p>好棒!!!值得再回來坐一次</p>
                    <div class="client">
                        <p>-陳小姐</p>
                    </div>
                </div>
                <div class="item">
                    <p>好棒!!!值得再回來坐一次</p>
                    <div class="client">
                        <p>-陳小姐</p>
                    </div>
                </div>
                <div class="item">
                    <p>好棒!!!值得再回來坐一次</p>
                    <div class="client">
                        <p>-陳小姐</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#">立即預約</a>
    
    </section>
    
    <footer>
        <div class="copyright">
            Copyright ©2022 All rights reserved <a href="./">復康愛接送</a> 
        </div>
    </footer>
    
    
    <script src="./js/app.js"></script>
    <script>
        $('.commentlist').slick({
            infinite: true,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    </script>
</body>
</html>
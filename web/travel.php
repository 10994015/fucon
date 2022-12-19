<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>復康愛接送</title>
        <link rel="shortcut icon" href="../images/logo3.png" type="image/x-icon" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="../css/app.css">
    </head>
<body>

    <?php include_once('../web/header.php'); ?>
    

    <main class="travel">
        <div class="travel-banner">
            <h1>無障礙包車旅遊</h1>
            <p>無障礙旅遊專線規劃，熊安穩帶您享受陽光、擁抱大自然，讓身心靈都健康。</p>
        </div>
        <section class="content">
            <?php for($i=0;$i<9;$i++){ ?>
            <div class="item">
                <div class="imgbox"><img src="../images/RWD16_20_2.jpg" alt=""></div>
                <h3>台中 武陵農場 賞花趣</h3>
                <p>
                    萬株櫻花樹盛開<br>
                    台灣最壯觀的櫻花林<br>
                    花期為二月中至二月底
                </p>
                <a href="./reserve.php">立即預約</a>
            </div>
            <?php } ?>
        </section>
    </main>


    <?php include_once('./footer.php'); ?>
    <script src="../js/app.js"></script>
</body>
</html>
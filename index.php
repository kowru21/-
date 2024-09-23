

<audio autoplay="autoplay" controls="controls">
                        <source src="music.mp3" type="audio/mpeg">
                        Установите гугл хром, ваш браузер плохой
                    </audio>

<?php

    //Connect to the database
    $host = "sql155120.byetcluster.com";   //See Step 3 about how to get host name
    $user = "if0_37368287";                     //Your Cloud 9 username
    $pass = "wanzqICkNP";                                 //Remember, there is NO password!
    $db = "if0_37368287_db1";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
    }

?>





<div class="video-bg">
   <video src="vecteezy_colorful-candy-rainbow-bright-blurry-gradient-abstract_28301464.mp4" type="video/mp4" playsinline autoplay muted loop></video>
   <div class="effects"></div>
   <div class="video-bg__content">
      
   </div>
</div>
<script src="https://telegram.org/js/telegram-web-app.js">
let tg = window.Telegram.WebApp;
tg.expand()
  tg.MainButton.enable()
tg.MainButton.text = "Погнали!";
  
</script>


<script>
$(window).resize(() => {
  let width = $(window).width();
  let height = $(window).height();
  $("#videoCover")
    .width(width)
    .height(height);
});
</script>

<style>
#videoCover video, div#videoCover {
    width: 100%!important;
    height: auto!important;
}

  body {
    font-family: 'Poppins';
    margin: 0;
    padding: 0;
}
.video-bg {
    height: 100vh;
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.video-bg video {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100vh;
    object-fit: cover;
}
.effects {
    position: absolute;
    object-fit: cover;
    top: 0;
    left: 0;
    z-index: 2;
    width: 100%;
    height: 100vh;
    background-color: rgba(0,0,0,0.6);
}
.video-bg__content {
    z-index: 2;
    color: #ffffff;
    font-size: 50px;
}
.main {
    max-width: 1600px;
    margin: 0 auto;
    margin-top: 50px;
    padding: 0 20px;
}
</style>


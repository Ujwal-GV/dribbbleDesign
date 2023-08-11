<?php
session_start();
include("connect.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div id="left">
            <img src="images/logo.png" alt="LOGO">
        </div>
        <div id="right">
            <div id="rightBox">
                <ol>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#images">IMAGES</a></li>
                    <li><a href="#services" style="transition: 0.8s ease;">SERVICES</a></li>
                    <li><a href="#gallery">GALLERY</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ol>
            </div>
        </div>
    </div>
    <marquee direction="right" id="marq"><?php echo "HELLO, ".$_SESSION['user']; ?></marquee>

    <div class="content" id="images">
        <div class="photoContainer">
            <div><img class="slidePhoto" src="images/hone.jpeg" alt="Slide 1"></div>
            <img class="slidePhoto" src="images/htwo.jpeg" alt="Slide 2">
            <img class="slidePhoto" src="images/hthree.jpeg" alt="Slide 3">
            <img class="slidePhoto" src="images/hfour.jpeg" alt="Slide 4">
            <img class="slidePhoto" src="images/hfive.jpeg" alt="Slide 5">
        </div>
    </div>

    <div class="btn">
        <button><div id="prev">&lt;</div></button>
        <button><div id="next">&gt;</div></button>
    </div>

    <hr>

    <div id="services">
        <h1 id="service">SERVICES</h1>
        <div class="sBox">
            <div class="one"><img src="images/invite.jpg" alt=""><div class="oneO"><b>PERSONALIZED GREETINGS</b><br>Can you imagine the surprise of your guest going 
                into the room and finding a flower arrangement or a fruit basket with their name? That can change their day. </div></div>
            <div class="two"><img src="images/dine.jpeg" alt=""><div class="oneT"><b>OUTDOOR DINING</b><br>An open-air space takes care of that, and it also 
                shows guests that you’re following hygiene protocol by giving them a safe space to enjoy themselves. </div></div>
            <div class="three"><img src="images/gym.jpeg" alt=""><div class="oneTh"><b>PERSONAL GYM EQUIPMENTS</b><br>Hotels usually have gyms and physical fitness areas. 
                However, not everyone likes to share the space. That said, we provide guests with personal gym equipments on demand.</div></div>
        </div>
    </div>

    <hr>

    <div id="gallery">
        <h1 id="gallery">GALLERY</h1>
        <div class="gBox">
            <div class="gone"><img src="images/one.jpeg" alt=""><br><br>AHMEDABAD</div>
            <div class="gtwo"><img src="images/two.jpeg" alt=""><br><br>BENGALURU</div>
            <div class="gthree"><img src="images/three.jpeg" alt=""><br><br>PATNA</div>
        </div>
    </div>

    <hr>

    <div id="aboutUs">
        <h1 id="about">ABOUT US</h1>
        <div class="usBox">
            <div class="uone"><img src="images/person4.jpeg" alt=""><br><b>HOTEL MANAGER</b><br>Mr. Yogitha Aras</div>
            <div class="utwo"><img src="images/person2.jpeg" alt=""><br><b>GENERAL MANAGER</b><br>Mr. Mukund Aras</div>
            <div class="uthree"><img src="images/person3.jpeg" alt=""><br><b>RECEPTIONIST</b><br>Ms. Harshitha</div>
        </div>
    </div>

    <hr>

    <div id="contactUs">
        <h1 id="contact">CONTACT US</h1>
        <div class="cBox">
            <div class="cone"><div class="coneO"><a href="mailto://ujwalgowda@gmail.com">MAIL<br><i>ujwalgowda2002@gmail.com</i></a></div></div>
            <div class="ctwo"><div class="coneT"><a href="tel:+7483267890">PHONE<br><i>+91 9874560125</i></a></div></div>
            <div class="cthree"><div class="coneTh"><a href="">LOCATION</a><br><i>#12, Housing Board<br>Bengaluru</i></div></div>
        </div>
    </div>
</svg>
</body>
</html>

<script>
    const photos = document.querySelectorAll(".slidePhoto");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");

    let currIndex = 0;

    function move(index){
        photos.forEach((photo,i) => {
        if(i===index)
        {
            photo.classList.add("active");
        }
        else{
            photo.classList.remove("active");
        }
    });
    currIndex = index;
    }

    prev.addEventListener("click",()=>{
        currIndex = (currIndex - 1 + photos.length) % photos.length;
        move(currIndex);
    });

    next.addEventListener("click",()=>{
        currIndex = (currIndex + 1) % photos.length;
        move(currIndex);
    });

    move(currIndex);

</script>
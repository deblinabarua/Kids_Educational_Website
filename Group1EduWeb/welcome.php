<?php
    ini_set("session.cache_limiter", "must-revalidate"); 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Educational Website for Kids</title>
  <script>
    function redirectToAboutPage() {
    window.location.href = 'about.html'; 
    }
    function logout(){
      <?php session_destroy(); ?>
      window.location.href ='edu_kids.html';
    }
  </script>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('intImage.jpg');
      background-size: cover;
      color: white;
      background-color: #34d5eb;
    }

    .header {
    background-color: rgba(173, 216, 230, 0.5); /* Light blue color with 50% opacity */
    background-position: top;
    color: black;
    padding: 10px 20px;
    text-align: left;
    font-family: 'Comic Sans MS', cursive, sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

    #options {
      display: flex;
      justify-content: space-around;
      padding: 50px 0;
    }

    .math, .gk, .game, .eng {
      width: 200px;
      height: 200px;
      /* background-color: rgba(0, 0, 0, 0.5); semi-transparent black background */
      border-radius: 25%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      font-weight: bold;
      text-transform: uppercase;
      cursor: pointer;
    }

.math {
    background-image: url('math.jpg');
    background-size: cover;
    transition: box-shadow 0.3s ease;
}

.math:hover {
    box-shadow: 0 0 40px 30px rgba(255, 255, 0, 0.5); 
}

.gk {
    background-image: url('gk.jpg');
    background-size: cover;
    transition: box-shadow 0.3s ease; 
}

.gk:hover {
    box-shadow: 0 0 40px 30px rgba(255, 255, 0, 0.5); 
}

    
.eng {
    background-image: url('eng.png');
    background-size: cover;
    transition: box-shadow 0.3s ease; 
}

.eng:hover {
    box-shadow: 0 0 40px 30px rgba(255, 255, 0, 0.5); 
}

.game {
    background-image: url('game.png');
    background-size: cover;
    transition: box-shadow 0.3s ease; 
}

.game:hover {
    box-shadow: 0 0 40px 30px rgba(255, 255, 0, 0.5); 
}

.txt {
    font-size: 18px;
    font-weight: bold; 
    font-family: Arial, sans-serif;
    color: black;
}
.left:hover {
    box-shadow: 0 0 20px 5px #ffa500; 
    transition: box-shadow 0.5s ease; 
    cursor: pointer;
}
.intro {
    margin-top: 20px; 
    padding: 20px; 
    background-color: rgba(173, 216, 230, 0.5); 
    border: 2px solid #ddd;
    border-radius: 15px;
    display: flex;  
    flex-direction: column; 
    align-items: center; 
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); 
}

.para {
    font-size: 18px;
    line-height: 1.6; 
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
}

</style>
</head>
<body>
<div class="header">
    <div class="left">
        <h1>Welcome <?php echo $_SESSION["nickname"]; ?>!</h1>
    </div>
    <div id="right">
        <div id="about">
            <button onclick="redirectToAboutPage()">About</button>
            <button onclick="logout()">Logout</button>
        </div>
    </div>
</div>
<div class="intro">
    <p class="para">
    Explore fun and interactive learning experiences in math, language arts, and more! Join us to make education engaging for young minds.
    Please Select any one of the following options given below :-
    </p>
</div>

<div id="options">
  <div class="option">
    <a href="math.html" class="math"></a>
    <p class="txt">Math</p>
  </div>
  <div class="option">
    <a href="gk.html" class="gk"></a>
    <p class="txt"> General Knowledge</p>
  </div>
  <div class="option">
    <a href="eng.html" class="eng"></a>
    <p class="txt">English</p>
  </div>
  <div class="option">
    <a href="games.html" class="game"></a>
    <p class="txt">Games</p>
  </div>
</div>

</body>
</html>
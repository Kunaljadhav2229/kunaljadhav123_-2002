<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO bhandardaradamcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: bhandardara dam.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BHANDARDARA DAM</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="CAPTAIN.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<body>
  <header>
    <h2 class="logo">Travel Guide</h2>
    <div class="toggle"></div>
    <div class="main-menu">
      <ul>
        <li><a href="#">Explore</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Contact</a></li>
        <li>
          <form class="example">
            <a><input type="text" placeholder="Search.." name="search" />
              <button type="submit"><i class="fa fa-search"></i></button>
            </a>
          </form>
        </li>
      </ul>
    </div>
    <script>
      const menuToggle = document.querySelector(".toggle");
      const showcase = document.querySelector(".main-menu");
      menuToggle.addEventListener("click", () => {
        menuToggle.classList.toggle("active");
        showcase.classList.toggle("active");
      });
    </script>
  </header>
  <!--section class="info"-->
  <div class="row">
    <h1>BHANDARDARA DAM</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120638.0645227955!2d74.67263294338294!3d19.11030915690623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhmednagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633603729514!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\Bhandardara Dam.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Bhandardara Dam also known as Wilson Dam has its existence on Pravara River and is situated 150 metres above ground level. 
This dam is located in holiday resort village of Bhandardara on the western coast of India. 
This lies in Ahmednagar district of Maharashtra.Arthur Lake is formed due to the construction of Wilson Dam 
and is fed by Pravara River. This lake is also known as Lake Arthur Hill or Bhandardara Lake.Bhandardara is 
among the major tourist attractions in India and has the presence of natural beauty, waterfalls, mountains, greenery,
invigorating air and pristine ambience.A huge waterfall in Randha village on Pravara river, 10 km away from the village
 of Shendi, is famous as the Randhha Falls, following the name of the village. Currently, this waterfall is found only in rainy 
season due to hydropower project. During the rainy season, the waterfall forms a very hug. On the right side of the main 
waterfall in the rainy season, another waterfall is seen. Watching both waterfalls s a thrilling experience.10 km from 
Bhandardara bus stand, 156 km from Pune and 177 km from Mumbai, Randhada waterfalls are in Ahmednagar district of Maharashtra.
A large circular waterfall on Wilson Damm,  known as ‘umbrella fall’ due to its characteristic shape. 
This umbrella falls seen only in the months from July to October.Around 500 meters from the Bhandardara bus station,
the Ambrella Falls is a beautiful Seasonal waterfalls situated at Bhandaranara (Wilson) in Ahmednagar district.
      </h3>
      <h2>COMMENTS</h2>
      </div>
      <h3>
      <article class="article4">
    <div class="commentwrapper">
      <form action="" method="POST" class="form">
        <div class="row">
          <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your Name" required />
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required />
          </div>
        </div>
        <div class="input-group textarea">
          <label for="comment">Comment</label>
          <textarea name="comment" id="comment" placeholder="Enter your comment" required></textarea>
        </div>
        <div class="input-group">
          <button name="submit" class="btn">Post Comment</button>
        </div>
      </form>
      <div class="prev-comments">
        <?php

        $sql = "SELECT * FROM bhandardaradamcomment";
        $result = mysqli_query($conn, $sql);
        if (
          mysqli_num_rows($result) >
          0
        ) {
          while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="single-item">
              <h4><?php echo $row['name']; ?></h4>
              <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
              <p><?php echo $row['comment']; ?></p>
            </div>
        <?php

          }
        }

        ?>
      </div>
    </div>
  </article>
      </h3>
    </div>
    <!--div class="left-column">
                <div class="card"></div>
               <h2>Introduction</h2>
                <img src="images/Satara.jpg" alt="blog">
                <h3>Detailed Information</h3>
                <h4>"Satara, a place bestowed with
                    historical abundance, is also known
                    for its natural landscape.
                    Surrounded by seven hills and
                    situated near the converging point
                    of two rivers, it will surely to
                    impress you."
                    The unique statue of Chhatrapati Shivaji at
                    Satara is a mark of the legacy left by the
                    Maratha empire. This journey of amazing
                    landmarks will continue with the colourfully
                    flowered Kas plateau, a World Heritage Site. Ancient forts like Ajinkyatara Fort and
                    gushing waterfalls, Satara also houses the
                    Satara Musuem, dedicated to Shivaji
                    himself. Do try the famous sweet, Kadi
                    Pedhe, as you sit on top of Yawateshwar
                    hills and see the twinkling road lights below.
                </h4>
            </div>
            <div class="left-column">
                <div class="card"></div>
               <h2>Introduction</h2>
                <img src="images/Satara.jpg" alt="blog">
                <h3>Detailed Information</h3>
                <h4>"Satara, a place bestowed with
                    historical abundance, is also known
                    for its natural landscape.
                    Surrounded by seven hills and
                    situated near the converging point
                    of two rivers, it will surely to
                    impress you."
                    The unique statue of Chhatrapati Shivaji at
                    Satara is a mark of the legacy left by the
                    Maratha empire. This journey of amazing
                    landmarks will continue with the colourfully
                    flowered Kas plateau, a World Heritage Site. Ancient forts like Ajinkyatara Fort and
                    gushing waterfalls, Satara also houses the
                    Satara Musuem, dedicated to Shivaji
                    himself. Do try the famous sweet, Kadi
                    Pedhe, as you sit on top of Yawateshwar
                    hills and see the twinkling road lights below.
                </h4>
            </div-->
    <div class="right-column">
      <div class="card">
        <h2>EXPLORE MORE PLACES:</h2>
        <h3><a href="ahmednagar fort.php">AHMEDNAGAR FORT</a></h3>
        <img src="images\Ahmednagar Fort.jpg" alt="AHMEDNAGAR FORT" />
      </div>
      <div class="card">
        <h3><a href="cavalry tank museum.php">CAVALRY TANK MUSEUM</a></h3>
        <img src="images\Cavalry Tank Museum.jpg" alt="CAVALRY TANK MUSEUM"/>
      </div>
      <div class="card">
      <h3><a href="chandbibis mahel.php">CHANDBIBI'S MAHEL</a></h3>
        <img src="images\Chandbibi's Mahel.jpg" alt="CHANDBIBI'S MAHEL" />
      </div>
      <div class="card">
      <h3><a href="shani shingnapur.php">SHANI SHINGNAPUR</a></h3>
        <img src="images\Shani Shingnapur.jpg" alt="SHANI SHINGNAPUR" />
      </div>
      <div class="card">
      <h3><a href="shirdi.php">SHIRDI</a></h3>
        <img src="images\Shirdi.jpg" alt="SHIRDI" />
      </div>
      <!--div class="card">
                    <h2>POPULAR POST</h2>
                    <img src="images/example.jfif" alt="">
                </div>
                <div class="card">
                    <h3>FOLLOW ME</h3>
                    <p>Some Text</p>
                </div-->
    </div>
  </div>
</body>
</head>
</html>
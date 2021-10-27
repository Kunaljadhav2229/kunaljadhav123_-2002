<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO guruganeshtapodhamcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: guru ganesh tapodham.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GURU GANESH TAPODHAM</title>
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
    <h1>GURU GANESH TAPODHAM</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120094.53793824287!2d75.81952216252519!3d19.841886060139437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bda57433b576edd%3A0xd0fcddb59437b904!2sJalna%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605273953!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Guru Ganesh Tapodham.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Guru Ganesh Bhavan is a place of religious importance in Jalna, Maharashtra. The site is located at a distance of about 3 km from the Jalna railway station.Guru Ganesh Bhavan, also commonly known as the Guru Ganesh Tapodham, is a religious centre in the city of Jalna for people of the Jain community. The place is also known as Karnatak Kesari. The building of the Guru Ganesh Bhavan is in the shape of a massive lotus-like flower. The exterior of the building is coloured completely in white. There is a circular fenced structure inside the building, with Jain mantras written on the boundary.Guru Ganesh Bhavan is maintained by the Jain trust called Shri Vardhaman Sthankwasi Jain Shravak Sangh, which also looks after the building and functioning of schools for children and visually challenged individuals, libraries and other institutions for the community. The gaushala or cow shelter at the Guru Ganesh Bhavan is the largest of its kind in the entire Marathwada region. For people who wish to stay at the Bhavan, a bhakt niwas or residence for pilgrims is available which is also taken care of by the Jain trust.There is a fair organised on the premises of the Guru Ganesh Bhavan each year which attracts a lot of visitors and pilgrims. The best time of the year to visit the place is in the pleasant months between October and March. Visitors can expect to spend up to 1 hour at this place.Guru Ganesh Bhavan is an important landmark in the city of Jalna. The best time to visit the place is during the early hours of the day. </h3>
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

        $sql = "SELECT * FROM guruganeshtapodhamcomment";
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
        <h3><a href="jalna fort.php">JALNA FORT</a></h3>
        <img src="images\Jalna Fort.jpg" alt="JALNA FORT"/>
      </div>
      <div class="card">
        <h3><a href="matsyodari devi temple.php">MATSYODARI DEVI TEMPLE</a></h3>
        <img src="images\Matsyodari Devi Temple.jpg" alt="MATSYODARI DEVI TEMPLE"/>
      </div>
      <div class="card">
      <h3><a href="moti bagh and talab.php">MOTI BAGH & TALAB</a></h3>
        <img src="images\Moti Bagh & Talab.jpg" alt="MOTI BAGH & TALAB"/>
      </div>
      <div class="card">
      <h3><a href="shri anandi swami temple.php">SHRI ANANDI SWAMI TEMPLE</a></h3>
        <img src="images\Shri Anandi Swami Temple.jpg" alt="SHRI ANANDI SWAMI TEMPLE"/>
      </div>
      <div class="card">
      <h3><a href="gautala autramghat sanctuary.php">GAUTALA AURTRAMGHAT SANCTUARY</a></h3>
        <img src="images\Gautala Autramghat Sanctuary.jpg" alt="GAUTALA AURTRAMGHAT SANCTUARY"/>
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
<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO aarey_greenerycomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: aarey_greenery.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AAREY GREENERY</title>
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
    <h1>AAREY GREENERY</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482632.8035714227!2d72.60097643609059!3d19.08268809821776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605443824!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\aarey_greenery.jfif" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Boating timings at Chota Kashmir is from morning 11:00 Am to evening 6:00 Pm. The very next thing that comes in mind is to How to reach this place and the answer to same is simply ride an auto rickshaw from Goregaon station east with distance of about 4 to 5 Kilometres. Alternative to same is BEST buses.
      Bollywood movies of 70’s and 80’s chosen the same Mini Kashmir area when they wanted to save money from real Kashmir gardens which would be expensive for just a song or few takes. They preferred the flora and faunas of Chota Kashmir right inside Goregaon dense forest which then had lots of flower gardens, beautiful climate which has no pollution for that perfect shots. Two of the retro classic Bollywood songs of Shammi Kapoor are ‘Jawan Mohabbat’ and ‘Dil Deke Dekho’ to list from few. To enjoy the best of this location apart from boating, you should plan a day off in Monsoon Rainy days and get blessed with the blissful climate, the greenery around and the happy birds, all together cheering for mother nature.
      The quality of boats are not at par and so is the water quality inside lake, Yet riding the Yellow, Pista and Red Colour boats is fun. It is recommended to not lean out to feel the water of lake as it is dangerous and boats might turn upside down if not loaded in balanced way (4 and 6 seater). Enjoy the group of ducks who might float along with you when at around shaded tree corners at new points inside lake watching those skylines of Goregaon right in front. I think, since this is the only place inside nature which has a beautiful lake for boating, revamp of same is much needed.

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

        $sql = "SELECT * FROM aarey_greenerycomment";
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
        <h3><a href="chotakashmir_boatclub.php">CHOTA KASHMIR BOAT CLUB</a></h3>
        <img src="images\chothakashmir_boatclub.jfif" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="elephanta_caves.php">ELEPHANTA CAVES</a></h3>
        <img src="images\elephanta_caves.jfif" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="sanjaygandhi_nationalpark.php">SANJAY GANDHI NATIONAL PARK</a></h3>
        <img src="images\sanjaygandhi_nationalpark.png" alt="Pratap" />
      </div>
      <div class="card">
      <h3><a href="sewri_mangrove_park.php">SEWRI MANGROVE PARK</a></h3>
        <img src="images\sewri _mangrove_park.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="magen_david_synagogue.php">MAGEN DAVID SYNAGOGUE</a></h3>
        <img src="images\magen_david_synagogue.jfif" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="banganga_tank.php">BANGANGA TANK</a></h3>
        <img src="images\banganga_tank.jfif" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="juhu_beach.php">JUHU BEACH</a></h3>
        <img src="images\juhu_beach .jpg" alt="gad" />
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
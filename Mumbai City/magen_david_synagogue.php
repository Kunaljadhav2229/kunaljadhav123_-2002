<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO magen_david_synagoguecomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: magen_david_synagogue.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MAGEN DAVIV SYNAGOGUE</title>
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
    <h1>MAGEN DAVIV SYNAGOGUE</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482632.8035714227!2d72.60097643609059!3d19.08268809821776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605443824!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\magen_david_synagogue.jfif" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      LOCATED IN THE BUSTLING NEIGHBORHOOD of Byculla, Mumbai, The Magen David Synagogue, an Orthodox Sephardi synagogue, was constructed in 1864 for the growing population of Baghdadi Jews in Mumbai. Outside of Israel, this synagogue is the largest one for Baghdadi Jewish people in all of Asia.
      Originally founded by David Sassoon, who was part of the Sassoon family that settled in Mumbai around 1832, the Magen David Synagogue was constructed as an Orthodox Sephardic synagogue for the Baghdadi Jewish community in India.
      In 1910, due to the increase in the Jewish population in Mumbai, Jacob Sassoon, David’s grandson, extended the synagogue to host larger services for the congregation. Today, daily morning services, Sabbath and Sabbath morning prayers are still conducted and a Shulchan breakfast (non-denominational) is served after. The synagogue is open to all religions, although members of the community are primarily Bene-Israel, Cochini or Baghdadi Jewish.
      In Mumbai, the synagogue stands out with its bright blue facade, enormous frontal columns, and stunning stained glass windows. The building also features a clock tower and a large prayer hall. The clock tower is visible in the congested neighborhood of Byculla next to businesses, office buildings, schools, street vendors and storefronts. 
      The synagogue has two Jewish schools associated with it. While the schools were once exclusively for Jewish children, over time—with the migration of Baghdadi Jewish communities to other countries like Israel, Australia, the United Kingdom, and Canada—the schools have opened to all communities in the Byculla area.  
      Know Before You Go
      While open to guests of all religions daily, visiting the synagogue during High Holy Days of Rosh Hashanah, the Jewish New Year, and Yom Kippur, the Day of Atonement, is not recommended as these observances are prayer intensive, demand focus from the parishioners and can involve fasting. It is a living synagogue so please keep that in mind when making your decision to visit and respect the practices therein.
      The synagogue offers a non-denominational Shulchan breakfast after morning prayers for all visitors. 


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

        $sql = "SELECT * FROM magen_david_synagoguecomment";
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
      <h3><a href="juhu_beach.php">JUHU BEACH</a></h3>
        <img src="images\magen_david_synagogue.jfif" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="banganga_tank.php">BANGANGA TANK</a></h3>
        <img src="images\banganga_tank.jfif" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="aarey_greenery.php">AAREY GREENERY</a></h3>
        <img src="images\aarey_greenery.jfif" alt="gad" />
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
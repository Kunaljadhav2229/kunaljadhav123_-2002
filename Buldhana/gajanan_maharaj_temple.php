<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO gajanan_maharaj_templecomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: gajanan_maharaj_temple.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GAJANAN MAHARAJ TEMPLE</title>
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
    <h1>GAJANAN MAHARAJ TEMPLE</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59783.37830787459!2d76.15152868497519!3d20.528304617777795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bda1df8cd6d9cb1%3A0x5f36a09324f0bb4d!2sBuldana%2C%20Maharashtra%20443001!5e0!3m2!1sen!2sin!4v1633604376851!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\gajanan_maharaj_temple.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Shri Gajanan Maharaj Samadhi Temple is at the center surrounded by two specious entrance gatesin the north and the west directions respectively.
      The Legendary soul Sant Shri Gajanan Maharaj enlightened through his noble incarnation and brought out tremendous change in the lives of numerous people with his spiritual knowledge and power for a short period of 32 years and ultimately foretold in the year 1908 about drawing a line to his incarnated life. They also hinted at this place where exactly the Samadhi temple is located as a source of inspiration and spiritual insight for millions of devotees. Shri Gajanan Maharajin his noble presence gave consent and directed for this Samadhi Temple. In the tunnel the holy existence of living body (Sanjeevan kaya) of Shri Gajanan Maharaj still exists where Shri Hari Patil laid the foundation stone. 
       The holy existence of this legendary soul in Samadhi Temple blesses and helps for solution to the millions in their difficulties when all optionsare blocked for them.	
       If all the saints prefer to gather at the holy place Shri Kshetr Pandharpur, (the headquarter of Warkari Sampraday which is the destination for all warkaries, i.e. devotees participating in Dindi or Plkhi, who ultimately aim to meet their beloved deities Viththal - Rukhumai), Shegaon is a perfect rendezvous for all devotees. The saints are truly noble in thier nature. They never discriminate with cast, colour, creed etc. Rather Saints always show a true path to devotees for an ideal and meaningful life. A true philosopher or guide (A true Guru) is the only ideal person who transforms people from their vices to virtues. A Saint is a synonym of pious life and a true devotee is known for his sincere faith.
      Shree’s Samadhi Temple has been built in the most attractive marble stones, where the devotees can have distant glimpse of the idol of Lord Gajanana through an arrangement called ‘ Mukh Darshan’ or can directly go through the tunnel to pray and have a glimpse of Shree’s idol very closely. The precious space near the idol in Gabhara enables the devotees to pray and have a soothing glimpse of the omnipotent spiritual idol of Lord Gajanan. The Samadhi temple’s over part has various sculptures of Gods and Goddesses carved in an exquisite manner. 
      Such a grand Samadhi Temple of Shri Gajanan Maharaj has certainly added a lot in the assists of Shegaon and remains a unique landmark of this holy town.

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

        $sql = "SELECT * FROM gajanan_maharaj_templecomment";
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
        <h3><a href="anand_sagar.php">ANAND SAGAR</a></h3>
        <img src="images\anand_sagar.jfif" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="botha_forest.php">BOTHA FOREST</a></h3>
        <img src="images\botha_forest.jfif" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="lonar_crate_lake.php">LONAR CRATER LAKE</a></h3>
        <img src="images\lonar_crater_lake.jfif" alt="Pratap" />
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
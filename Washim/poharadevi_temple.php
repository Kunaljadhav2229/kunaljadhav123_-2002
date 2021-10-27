<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO poharadevi_templecomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: poharadevi_temple.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>POHARADEVI TEMPLE</title>
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
    <h1>POHARADEVI TEMPLE</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59943.66729085644!2d77.08911093295569!3d20.11404599201452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd0e3a62192cac5%3A0xaff70c028eb32b0b!2sWashim%2C%20Maharashtra%20444505!5e0!3m2!1sen!2sin!4v1633606242622!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="image\poharadevi_temple.jfif" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Poharadevi is one of the important and well-known pilgrimages of Maharashtra.
      Poharadevi is one of the important and well known pilgrimage of Maharashtra particularly workshiped and devoted by Banjara Samaj. It is a wholy and pious place for Banjara community. The people belongly to Banjara tribe come in crowed of thousands and lakes all places of India to workship deily of Poharadevi. The present research paper depices the important of Poharadevi as a one of the pilgrimages of Banjara community in India. Poharadevi a holy village in a Maharashtra, has been emerged out as pilgrimage center. Since it is associated with ‘Sevabhaya’ and ‘Jagdamba devi’ Temple a diety worshiped by the millions of people from all over the state and outside the state as well. During the last one decades Poharadevi has witnessed remarkable changes in population number occupational structure, business structure etc. Geography is mainly related to the study of cause- effect-relationship of various phenomena in the context of space and time. The calendar one major fairs have been held in a year in Poharadevi, of which Ramnavmi fair ( held in march ) . The remaining three fairs are also characterized by the visit of thousand
      devotes. More than Fifteen lakes people used to visit Poharadevi annually.Area: For the Research essay Poharadevi, the religious hill station has been selected Vashim Dist.
      Is situated in Maharashtra state at east region. Poharadevi is situated in Vashim District at Manora Taluka, The total Geographical field of this village is about 550 het. And the year of 2001, the lodging of pilgrims. The temple of Jagadambadevi is built in the middle of the village by the monumental temple of the Saint Sevalal Maharaj. The fair is arranged on the occasion of the Rammanavmi in Chaitra Shukla Paksha. This fair is helled for seven days continuously. The number of the pilgrims comes to this fair from the different states and districts


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

        $sql = "SELECT * FROM kaaspatharcomment";
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
        <h3><a href="jaintemple_shirpurjain.php">JAIN TEMPLE SHIRPUR JAIN</a></h3>
        <img src="image\jain_temple.jfif" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="daridrya_harana_tirth.php">DARIDRYA HARANA TIRTH</a></h3>
        <img src="image\daridrya_harana_tirth .jfif" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="padmateerthashiva_temple.php">PADMA TEERTHA SHIVA TEMPLE</a></h3>
        <img src="image\padma_teerthashiva_temple.jfif" alt="Pratap" />
      </div>
      <div class="card">
      <h3><a href="ram_temple.php">RAM TEMPLE</a></h3>
        <img src="image\ram_temple.jfif" alt="gad" />
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
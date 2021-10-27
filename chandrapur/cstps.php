<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO cstpscomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: cstps.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CHANDRAPUR SUPER THERMAL POWER STATION</title>
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
    <h1>CHANDRAPUR SUPER THERMAL POWER STATION</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120000.19847454636!2d79.20549986492954!3d19.966241411907347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd2d5d164adc333%3A0x440ae57d85f01b55!2sChandrapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633604422283!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="image\cstps.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      The Chandrapur Super Thermal Power Station, sprawling over 12212 hectares and employing a workforce of around 3460 people, is the biggest pit head thermal power station of the Maharashtra State Power Generation Company Limited, located 6 km from Chandrapur city. The 3,340 MW power station complex contributes more than 25% of the electricity for the entire state. It is the first ever thermal power plant in India to have commissioned a 500 MW unit, which it did in 1991-92.
      The first stage of the plant was sanctioned in 1976 and the Central Energy Minister Shri K. C. Pant laid the foundation stone on 16 January 1977. The first set of 210 MW unit was commissioned in August 1983 and the second set in July 1984. The first unit was dedicated to the nation on 8 Oct 1984 by the Hon. Prime Minister, the late Smt Indira Gandhi. The station has 4 units of 210 MW, 3 units of 500 MW and 2 units of 500MW. Durgapur and Padmapur Collieries of WCL are the pit head mines from where the coal is transported by Ropeway.
      A 420-metre masonry dam, constructed on the river Erai at a distance of about 15 km from the power station, caters to its water requirements. It is a composite dam with a central spillway and earth saddle dams on left and right bank of 800 and 425 meters length respectively. MSPGCL acquired 7041 hectares of land for the construction of this dam. It has an effective storage capacity of 198 million cu. meters, of which 12 million cu. meters per year is released to Chandrapur city.


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

        $sql = "SELECT * FROM cstpscomment";
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
      <h3><a href="chandrapur_city.php">CHANDRAPUR CITY</a></h3>
        <img src="image\Chandrapur_city.jpg" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="cstps.php">CHANDRAPUR SUPER THERMAL POWER STATION</a></h3>
        <img src="image\Chandrapur Super Thermal Power Station(cstps).jpg" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="anandwan.php">ANANDWAN</a></h3>
        <img src="image\Anandwan.jpg" alt="Pratap" />
      </div>
      <div class="card">
      <h3><a href="mahakali_temple.php">MAHAKALI TEMPLE</a></h3>
        <img src="image\mahakali Temple.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="tadoba_national_park.php">TADOBA NATIONAL PARK</a></h3>
        <img src="image\Tadoba_National_Park.jpg" alt="gad" />
      </div>
      <div class="card">
        <h3><a href="gond_raja.php">GOND RAJA</a></h3>
        <img src="image\gond_raja_fort.jpg" alt="Pratap" />
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
<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO bahrot_cavescomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: bahrot_caves.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BAHROT_CAVES</title>
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
    <h1>BAHROT_CAVES</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60102.891535138966!2d72.73402293095756!3d19.69427821633751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be71cdea3ddc177%3A0xdb2b913629961d24!2sPalghar%2C%20Maharashtra%20401404!5e0!3m2!1sen!2sin!4v1633605801328!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\bahrot_caves.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Bahrot Caves, locally known as Barad, near Dahanu, Maharashtra are the only Parsi/Zoroastrian Cave temple in India. Bahrot Caves is located 25 km south of Sanjan, Gujarat and are situated at a small distance of 8 km away from the village of Bordi also nearly 9 km from NH48 from Talasari .They were unused Buddhist caves excavated by Buddhist monks. Zoroastrians hid for 13 years in these mountains after an invasion of their settlement at Sanjan by Alaf Khan, a general of Muhammad bin Tughluq in 1393 CE. The ‘Iranshah Flame’ was also moved to Bahrot during this period (1393–1405 CE). Even today, this Holy Fire is burning, now housed in a temple in Udvada, see Iranshah Atash Behram and it is given the most eminent grade of devoted fire in the world. Bahrot Caves have been declared a heritage site and is a protected monument under the Archaeological Survey of India (ASI).
      Barot Caves are the Zoroastrian or Parsi Cave Temples. These caves are comprised of water cisterns, seven in a row to form the face of the cliff. These cisterns are water tanks rectangular in shape and only one of them hold water till beginning of February or end of January and filled up during the Monsoon season. The largest of the tanks remain filled up for entire year, which protects their sacred icon known as the e Iran Shah Fire. These caves are of religious and historical importance to the Parsis. The Parsi ancestors took refuge in these caves from the Muslim invaders for a period of 13 years. It is believed during this time they took the fire, “Iran Shah Flame” with them inside the caves which is believed to burn till present date. These caves reflect the harsh conditions survived by the brave Parsis in Bahrot to keep their faith in Ahura-Mazda alive.

      HISTORY OF THE ATTRACTION
      The presence of pottery, coins and glassware in these caves that dates back to Sassanian Period in Iran throws light on the fact that trading relations existed between the Gujrat coast and the Iranian Zoroastrians. A familiar post of the Parsis with whom they traded was Sajan. This was the reason for them to take shelter in these caves to escape the Muslim attack.

      GETTING THERE
      These caves can be reached by air, road or rail. The nearest international airport is Chatrapati Shivaji International Airport (Mumbai), situated 145 km from its closest town, Bordi. The nearest railway station is Gholvad, which is 1.5km from Bordi. By road it can be reached by bus services, owned by State Government. The top of the caves can be reached from the Aswali Village, which takes about 2 to 3 hours.

      THINGS TO DO IN AND AROUND
      These Parsi cave Temples reflect the story of how the Zoroastrian ancestors safeguarded their faith against odds and inside the main temple, the fire can be seen burning. This holy fire is considered to be a superior grade of sacred fire. These cave temples is an architectural marvel located at Dahanu,
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

        $sql = "SELECT * FROM bahrot_cavescomment";
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
        <h3><a href="dabhosa_waterfalls.php">DABHOSA WATERFALLS</a></h3>
        <img src="images\dabhosa_waterfalls.jpg" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="jivdani_temple.php">JIVDANI TEMPLE</a></h3>
        <img src="images\jivdani_temple.jfif" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="tungareshwar_wildlife_santuary.php">TUNGARESHWAR WILDLIFE SANTUARY</a></h3>
        <img src="images\tungareshwar_wildlife_sanctuary.jpg" alt="Pratap" />
      </div>
      <div class="card">
      <h3><a href="tungareshwar_temple.php">TUNGARESHWAR TEMPLE</a></h3>
        <img src="images\tungareshwar_temple.jpg" alt="gad" />
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
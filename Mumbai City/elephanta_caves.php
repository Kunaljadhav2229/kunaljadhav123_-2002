<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO elephanta_cavescomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: elephanta_caves.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ELEPHANTA CAVES</title>
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
    <h1>ELEPHANTA CAVES</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482632.8035714227!2d72.60097643609059!3d19.08268809821776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605443824!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\elephanta_caves.jfif" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      The Elephanta Caves are located in Western India on Elephanta Island (otherwise known as the Island of Gharapuri), which features two hillocks separated by a narrow valley. The small island is dotted with numerous ancient archaeological remains that are the sole testimonies to its rich cultural past. These archaeological remains reveal evidence of occupation from as early as the 2nd century BC. The rock-cut Elephanta Caves were constructed about the mid-5th to 6th centuries AD. The most important among the caves is the great Cave 1, which measures 39 metres from the front entrance to the back. In plan, this cave in the western hill closely resembles Dumar Lena cave at Ellora, in India. The main body of the cave, excluding the porticos on the three open sides and the back aisle, is 27 metres square and is supported by rows of six columns each.
      The 7-metre-high masterpiece “Sadashiva” dominates the entrance to Cave 1. The sculpture represents three aspects of Shiva: the Creator, the Preserver, and the Destroyer, identified, respectively, with Aghora or Bhairava (left half), Taptapurusha or Mahadeva (central full face), and Vamadeva or Uma (right half). Representations of Nataraja, Yogishvara, Andhakasuravadha, Ardhanarishwara, Kalyanasundaramurti, Gangadharamurti, and Ravanaanugrahamurti are also noteworthy for their forms, dimensions, themes, representations, content, alignment and execution.
      The layout of the caves, including the pillar components, the placement and division of the caves into different parts, and the provision of a sanctum or Garbhagriha of sarvatobhadra plan, are important developments in rock-cut architecture. The Elephanta Caves emerged from a long artistic tradition, but demonstrate refreshing innovation. The combination of aesthetic beauty and sculptural art, replete with respondent Rasas, reached an apogee at the Elephanta Caves. Hindu spiritualistic beliefs and symbology are finely utilized in the overall planning of the caves.
      Criteria (i): The fifteen large reliefs surrounding the lingam chapel in the main Elephanta Cave not only constitute one of the greatest examples of Indian art but also one of the most important collections for the cult of Shiva.  
      Criteria (iii): The caves are the most magnificent achievement in the history of rock-architecture in western India. The Trimurti and other colossal sculptures with their aesthetic setting are examples of unique artistic creation.


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

        $sql = "SELECT * FROM elephanta_cavescomment";
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
      <h3><a href="juhu_beach.php">JUHU BEACH</a></h3>
        <img src="images\juhu_beach .jpg" alt="Maha" />
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
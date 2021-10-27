<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO melgaht_tiger_reservecomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: melgaht_tiger_reserve.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MELGAHT TIGER RESERVE</title>
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
    <h1>MELGAHT TIGER RESERVE</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119270.55804778819!2d77.69170507394485!3d20.904072930606237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a4a67774bc15%3A0x3c7b3f78ca4f9635!2sAmravati%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633604035230!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\melgaht_tiger_reserve.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Melghat Tiger Reserve is approachable by air, railways as well as roads.  The nearest air port is Nagpur which is about 255 kms.  from Semadoh. Semadoh is the most well known, centrally located village of the Melghat Tiger Reserve.   The nearest railway station is Badnera located in the central railway zone on Mumbai-Kolkata route.   The distance from Badnera to Semadoh is about 110 kms.  Other noteworthy entry points for the Melghat forests is through Harisal and Akot which are located on Amravati-Dharni State highway no. 6 and Akot-Harisal State highway no. 204 respectively.  On the Northern side, the nearest railway station is at Khandwa which is at a distance of 75 kms. from Harisal.  Other major habitation/locations in the area are Jarida, Tarubanda, Chaurakund, Rangubeli, Hatru, Gadga, Bhandum and the villages from core Dhargad, Kelpani, Rora, Semadoh, Madizadap, Chopan, Pili, Somthana (K), Somthana (B), Talai, Ambabarwa, Rohankhidki, Pastalai, Mangia, Memna, Malur, Gullarghat, Dolar, Adhav, Raipur, Chunkhedi, Makhla, and Dhakna. These places are connected by state bus service with a frequency    varying from 1 to 3 visits per day.

       Almost all villages in the Melghat area have been connected with road network. Some roads have been tarred.  Therefore, in fair season communication is easy barring internal roads which are either murum or earthen roads.  However in rainy season some of these roads get washed away at the cross drainages when the streams running across them are in spate. This renders some of the roads difficult to tread and consequently, some portion of the Reserve becomes inaccessible during rainy season.   In Melghat wireless network has been strengthened from time to time.  Illegal tree cutting has increased to some extent due to the increased road network.  It has posed danger to wildlife also, as threat perception for illicit trade in wild animals and their products has increased. Check gates and barriers have been installed and made operational on all entry points to the Reserve with a view to regulate the entry of visitors and also keep a check on illegal and suspicious intruders in the area.
       At the northern extreme of the Amravati district of Maharashtra, on the border of Madhya Pradesh, lies the Melghat in the South-western Satpura mountain ranges. Melghat means 'meeting of the ghats', which describes the area as a large tract of unending hills and ravines scarred by jagged cliffs and steep climbs.

       The Melghat area was declared a tiger reserve in 1974. The Meghat Tiger Reserve divided into Sipna, Gugamal and Akot Wildlife Division, administratively. Presently, the total area of the reserve is around 1677 km2. In Sipna and Gugamal Wildlife Division, there are more than 10 villages in the core area. In Akot wildlife Division, there are no villages in core area. All villages are rehabilitated in akot wildlife division.

       The forest is tropical dry deciduous in nature, dominated by teak (Tectona grandis). The reserve is a catchment area for five major rivers: the Khandu, Khapra, Sipna, Gadga and Dolar. These all rivers are tributaries of the river Tapti.

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
        <h3><a href="bamboo_garden.php">BAMBOO GARDEN</a></h3>
        <img src="images\bamboo_garden.jpg" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="chikhaldara_wildlife_santuary.php">CHIKHALDARA WILDLIFE SANTUARY</a></h3>
        <img src="images\chikhaldara_wildlife_sanctuary.jfif" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="gawilgarh_fort.php">GAWILGARD FORT</a></h3>
        <img src="images\gawilgarh_fort.jfif" alt="Pratap" />
      </div>
      <div class="card">
      <h3><a href="iskcon.php">ISKCON</a></h3>
        <img src="images\iskcon.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="ambadeviandekviradevi_mandir.php">AMBADEVI AND EKVIRADEVI MANDIR</a></h3>
        <img src="images\ambadeviandEkviradevi_mandir.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="chatri_talao.php">CHATRI TALAO</a></h3>
        <img src="images\chatri_talao.jfif" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="wadali_talav.php">WADALI LAKE</a></h3>
        <img src="images\wadali_talav.jpg" alt="gad" />
      </div>
      <div class="card">
      <h3><a href="wardha_dam.php">WARDHA DAM</a></h3>
        <img src="images\wardha_dam.jpg" alt="gad" />
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
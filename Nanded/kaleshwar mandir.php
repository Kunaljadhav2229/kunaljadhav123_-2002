<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO kaleshwarmandircomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: kaleshwar mandir.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KALESHWAR MANDIR</title>
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
    <h1>KALESHWAR MANDIR</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120610.97074960069!2d77.24581349941565!3d19.147413157877786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605642881!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Kaleshwar Mandir.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Kaleshwar Mandir is beautiful ancient temple located in Vishnupuri, Nanded. This temple is located around 5. 3 kms away from the city centre of Nanded.Kaleshwar temple is a renowned temple of Lord Shivaa, which is located in the outskirts of city Nanded. It is said that the temple is around 400 years old. It is situated on the banks of Godavari river. The architectural beauty is enough to mesmerize the visitors. In the inside there is a huge statue of lord Shiva, which attracts the locals as well as tourists here in a large number. The outside of the temple has a Fair like appeareance, it remains crowded most of the time. There are stairs from the temple which leads down to the river, it gives a feel of a pilgrimage place.The architecture of the temple is similar to the South Indian temples with rich sculptures and large courtyards. The temple premises are very beautifully paved with marble. The Temple has many sculptures adorning the exterior walls. The shivalinga in the innermost sanctum is made out of black stone and decorated with flowers during Shiva Ratri. The roof of the Temple is supported by columns which are engraved with depictions from the Ramayana and Mahabharata. The top of the Temple is tiered and has a flag.Kaleshwar Temple remains very crowded during special occassions like Shravana month, Maha shivratri, Navratri etc. as worshiping Lord shiva is considered as a must. Being located on the banks of Godavri river, the place offers a beautiful sight to the visitors. Where as the temple remains crowded the banks of the Godavari river remains calm. There are many water sports facilities like boating, water scooter etc. are available for the visitors. Boating is the major attraction here. Nearby the temple, there is a dam named as Vishnupuri Dam, which adds up to the beauty of this place. There are food stalls available near the ghats which provides with few light snacks. There are many shops outside the temple premise, which offers flowers, sweets, incense sticks etc. that are required for offerings. There are lockers and bathroom facilities provided for the visitors by the temple authorities. The temple premise is kept neat and clean and well maintained. There is now, ample amount of parking space available for two and four wheelers. It is said that sunrise and sunset looks very beautiful from the temple. Therefore it is advised to visit this place either early in the morning or in the evening hours, that is from 6:00 AM to 8:00 AM or 5:00 PM to 7:00 PM. People usually spend around 1-2 hours here.Kaleshwar temple remains open during timings 6:00 AM - 7:00 PM. To catch the Godavari Aarti, it is suggested to visit between 6:00 PM - 7:00 PM. Local buses and cabs are easily available for the comfortable ride. Kaleshwar Temple is beautiful with its simple architecture and immense spirituality it evokes. Also, the breeze from the Godavari is very rejuvenating and one can spend quality time here. It is a very popular picnic spot with a view of the Vishnupuri Dam.</h3>
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

        $sql = "SELECT * FROM kaleshwarmandircomment";
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
        <h3><a href="isapur dam.php">ISAPUR DAM</a></h3>
        <img src="images\Isapur Dam.jpg" alt="ISAPUR DAM"/>
      </div>
      <div class="card">
        <h3><a href="kandhar fort.php">KANDHAR FORT</a></h3>
        <img src="images\Kandhar Fort.jpg" alt="KANDHAR FORT"/>
      </div>
      <div class="card">
      <h3><a href="masjid of biloli.php">MASJID OF BILOLI</a></h3>
        <img src="images\Masjid Of Biloli.jpg" alt="MASJID OF BILOLI"/>
      </div>
      <div class="card">
      <h3><a href="nanded fort.php">NANDED FORT</a></h3>
        <img src="images\Nanded Fort.jpg" alt="NANDED FORT"/>
      </div>
      <div class="card">
      <h3><a href="sahastrakund waterfall.php">SAHASTRAKUND WATERFALL</a></h3>
        <img src="images\Sahastrakund Waterfall.jpg" alt="SAHASTRAKUND WATERFALL"/>
      </div>
      <div class="card">
      <h3><a href="sikh museum.php">SIKH MUSEUM</a></h3>
        <img src="images\Sikh Museum.jpg" alt="SIKH MUSEUM"/>
      </div>
      <div class="card">
      <h3><a href="visava garden.php">VISAVA GARDEN</a></h3>
        <img src="images\Visava Garden.jpg" alt="VISAVA GARDEN"/>
      </div>
      <div class="card">
      <h3><a href="hazur sahib.php">HAZUR SAHIB</a></h3>
        <img src="images\Hazur Sahib.jpg" alt="HAZUR SAHIB"/>
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
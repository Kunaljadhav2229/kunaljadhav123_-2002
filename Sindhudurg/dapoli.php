<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO dapolicomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: dapoli.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DAPOLI</title>
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
    <h1>DAPOLI</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d981173.7497846673!2d73.20341697731168!3d16.132297863782764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc01b4960627317%3A0xbda348ffbc374f91!2sSindhudurg%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633606103983!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\dapoli.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Located a little over 200 kilometres from Mumbai, Dapoli is a small city surrounded by coconut and palm trees. Dapoli is located in the northern part of the district of Ratnagiri, in the Konkan region of Maharashtra, and is a popular beach destination. In addition to the many coconut farms that are scattered in Dapoli, the city also has numerous scenic beaches, which offer beautiful views of the seashore and the natural landscapes. The verdant greenery, along with the hills surrounding the city, add to its beauty.

      Dapoli is a treasure trove of sightseeing attractions, and has something to offer to all kinds of tourists. From pristine beaches and historical structures, to ancient temples, mesmerising caves and age-old forts, the city has a lot to explore. Some of the best attractions of Dapoli include the Harnai Sea Port, which is one of the best attractions that offer a glimpse into the rich history and culture of the region. Other famous attractions of Dapoli include the Kanaka Durga Fort, also known as the Land Fort, and the Suvarnadurg, or the Sea Fort. You can also take a dip at the perennial Unhavare Hot Springs, and relax during your trip here. For history buffs, the best place to visit in Dapoli are the ancient Panhalekaji Caves, where you can not only enjoy the history, but also the archaeology findings. For those who love water sports, you can visit one of the many scenic beaches in the region, such as the Murud Beach, or the Kelshi Beach.

      When visiting Dapoli, you can also enjoy a lot of exciting activities. In addition to water sports like swimming, surfing and parasailing, to adventure activities like hiking and trekking, Dapoli has a lot to offer to tourists. You can also enjoy exploring the caves here or watching dolphins in the backwaters in Dapoli. Due to its advantageous location in the Konkan region, Dapoli is also a great place to indulge in the local Kokum juice, jackfruit chips or the numerous mouth-watering Konkani delicacies.

      Due to its tropical location, Dapoli experiences cool weather throughout the year. However, summers in Dapoli are comparatively more humid than the other months. The rainy season from July to September makes the entire region come to life with lush greenery and a relaxing ambience everywhere. The months from October to March make up the winter season in Dapoli, when the cool weather makes it great for sightseeing and water sports, and even dolphin watching.








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

        $sql = "SELECT * FROM dapolicomment";
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
        <h3><a href="alibaug.php">ALIBAUG</a></h3>
        <img src="images\alibaug.jfif" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="ganapatipule.php">GANAPATIPULE</a></h3>
        <img src="images\ganapatipule.jpg" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="tarkarli.php">TARKARLI</a></h3>
        <img src="images\tarkarli.jpg" alt="Pratap" />
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
<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO syedallaudinurfimamsahebsdargahcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: syed allaudin urf imam sahebs dargah.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SYED ALLAUDDIN URF IMAM SAHEB'S DARGAH</title>
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
    <h1>SYED ALLAUDDIN URF IMAM SAHEB'S DARGAH</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d950236.9789972873!2d73.6186245210936!3d21.51307770358669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdf09bdd5c64475%3A0xc51ba387c33efb4c!2sNandurbar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605690824!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Syed Allaudin Urf Imam Saheb's Dargah.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) is nephew of Badshah-E-Hind Hazrat Khwaja Gareeb Nawaz (R.A). Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) has two elder brothers named Hazrat Syed Tara- Hussein (R.A) (whose Dargah is at Taragarh fort, Ajmer) and Awalgadi (Whose Dargah is located at the bottom hill on which Hazrat's Dargah is situated, Nandurbar).
Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) was born in Damishque (Currently - Damascus, Syria). He along with 40 other Sufi Saints including Hazrat Khwaja Gareeb Nawaz (R.A) came to India (Generally termed as 40 Palkhi). Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) along few Sufi Saints moved towards the DECCAN area of Hindustan.
After reaching Nandurbar, He saw town is fully embraced by black magic and decided to settle there. Therefore Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) moved to the Hill where currently Dargah is located and resided there spreading the teachings of Sufism. After observing the influence of Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A), the local king named 'Nanda Guari' challenged Hazrat over superiority. 
The King insulted Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) and said to leave the location or fight. They had row over area and Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) said to cut his head and placed on the place where Hazrat's Mazaar is located. Some people say that Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) continued fight with sliced head. After seeing this Nanda Guari humbled and become follower of Islam.  
Thus Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) has main Mazaar located at Nandurbar, Maharashtra. The Mazaar is auspicious place having Gummad (crown) of 75 Kilogram Gold. The Dargah has been built by Ahmadshah Badshah, Ahmednagar, Maharashtra 400 years back. 
Thus Hazrat Syed Alauddin Imam Badshah Awalgadi (R.A) Dargah is said to be KHANQAH for fakirs of Chisti Sufi order. It is said that Khwaja sahib spread Sufi Islam by saying, Imam Badshah have given teachings of Chisti order.
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

        $sql = "SELECT * FROM syedallaudinurfimamsahebsdargahcomment";
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
        <h3><a href="susridam.php">SUSRI DAM</a></h3>
        <img src="images\Susri Dam.jpg" alt="SUSRI DAM" />
      </div>
      <div class="card">
        <h3><a href="toranmal.php">TORANMAL</a></h3>
        <img src="images\Toranmal.jpg" alt="TORANMAL"/>
      </div>
      <div class="card">
      <h3><a href="yashawant lake.php">YASHAWANT LAKE</a></h3>
        <img src="images\Yashawant Lake.jpg" alt="YASHAWANT LAKE" />
      </div>
      <div class="card">
        <h3><a href="asthamba.php">ASTHAMBA</a></h3>
        <img src="images\Asthamba.jpg" alt="ASTHAMBA"/>
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
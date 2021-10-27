<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO ekviradevitemplecomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: ekvira devi temple.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EKVIRA DEVI TEMPLE</title>
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
    <h1>EKVIRA DEVI TEMPLE</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119285.02375230989!2d74.6938193832449!3d20.885871330516192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdec5f2c571bb47%3A0x5827ae11b9d7cb1c!2sDhule%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633604480065!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Ekvira Devi Temple.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Aadishakti Ekvira Devi Temple is a prominent Hindu temple located in Dhule, Maharashtra. The Ekvira Devi Temple is only 1. 4 kilometers from the Dhule city's center point and it takes just only 5 minutes by vehicle or 15 minutes to by walk to reach the temple.
According to epic of Mahabharata, the arrival of Ekvira Devi (incarnation of Renuka Devi) is that she appeared before the Pandavas during their Aranyavasam (exile period in forest) and asked them to build a temple for her. She also mentioned that she will bless him with a mighty boon only when they build the temple finished overnight. Pandavas agreed and built this beautiful temple overnight and they were blessed by the Ekvira Devi that they will not be discovered by anybody during their secret exile period. Later, according to carbon dating that this shrine was developed over two periods from 2nd Century BC and 2nd Century AD and from the 5th Century AD to the 10th Century.
Aadishakti Ekvira Devi Temple is specially worshipped by the Aagri-Koli (Maharashtra's Fishermen) group of people and also many other high caste people like Daivadnya Brahminns and Kunbi caste worship the Ekvira Devi as their family deity. All occasions of Navarathri and Chaitri Navaratri mark a special rituals held in these Ekvira temples and huge crowd of devotees rush into the temple to have the mighty blessings from the Goddess Ekvira.
Aadishakti Ekvira Devi Temple can be visited during timings 5:00 AM - 7:00 PM and special pujas or rituals held in the early morning and early evening like any other temple in India.
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

        $sql = "SELECT * FROM ekviradevitemplecomment";
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
        <h3><a href="laling fort.php">LALING FORT</a></h3>
        <img src="images\Laling Fort.jpg" alt="LALING FORT" />
      </div>
      <div class="card">
        <h3><a href="nakane lake.php">NAKANE LAKE</a></h3>
        <img src="images\Nakane Lake.jpg" alt="NAKANE LAKE"/>
      </div>
      <div class="card">
      <h3><a href="bhamer fort.php">BHAMER FORT</a></h3>
        <img src="images\Bhamer Fort.jpg" alt="BHAMER FORT"/>
      </div>
      <div class="card">
        <h3><a href="songir fort.php">SONGIR FORT</a></h3>
        <img src="images\Songir Fort.jpg" alt="SONGIR FORT"/>
      </div>
      <div class="card">
        <h3><a href="vk rajwade research board.php">V.K. RAJWADE RESEARCH BOARD</a></h3>
        <img src="images\V.K. Rajwade Research Board.jpg" alt="V.K. RAJWADE RESEARCH BOARD"/>
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
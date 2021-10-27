<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO kantaidamcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: kantai dam.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KANTAI DAM</title>
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
    <h1>KANTAI DAM</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119201.92124042542!2d75.50538183538272!3d20.99023031071213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90fa4a1eab90f%3A0x37f67bd21bff0a3c!2sJalgaon%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605229279!5m2!1sen!2sin" width="300" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Kantai Dam.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>The Kantai weir was inaugurated by the deputy CM of Maharashtra, Mr. Ajit Pawar and Minister for Irrigation, Mr. Sunil Tatkare. This weir has the capacity of 179.2 crore litres. Funding for this project came from Jain Irrigation’s internal accruals amounting to 8 crores. As per the state government of Maharashtra’s directives we are entitled to use only 50% of water and 50% of water will be used by the society. This weir will ensure sustainable and assured supply of water for Jain Irrigation as 50% of water will be used for Food processing (fruit and onion dehydration), mainly because we require water during peak summer when there is shortage of water due to drought. The situation worsens during low rainfall seasons. When the mango season starts in peak summer, once again water availability becomes an issue, however, drinking water gets priority and quite rightly so, as this is a drought prone area. Therefore, this big storage structure is not only sufficient for us but also for the needs of the society around us. It goes without saying that serving the ecosystem was an important motive. This weir will also help to reduce the off seasonal water availability and further help to reduce the flash or sudden floods in the downstream area up to a certain extent.
This catchment area is in the basin of Girna River covering around 9000 sq.km. The spread of the water is 5.6 Km from the weir i.e., backwaters will also support fisheries. This region has high temperature and moderate rain fall of 700mm annually, with frequent occurrence of drought as mentioned earlier. Therefore, this storage structure will be beneficial for surrounding 7–8 villages with populations ranging from 15–16 thousand. It suits our interests as we are an agriculture based company and headquartered in Jalgoan about 10 km from the weir. We are not aware, as to why other companies didn’t venture into these areas as we have done. Perhaps, the reason could be that they are getting water supply from MIDC industrial belts in the cities of Pune, Nasik, and Aurangabad etc.</h3>
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

        $sql = "SELECT * FROM kantaidamcomment";
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
        <h3><a href="gandhi research foundation.php">GANDHI RESEARCH FOUNDATION</a></h3>
        <img src="images\Gandhi Research Foundation.jpg" alt="GANDHI RESEARCH FOUNDATION" />
      </div>
      <div class="card">
      <h3><a href="icchapurti ganesh mandir.php">ICCHAPURTI GANESH MANDIR</a></h3>
        <img src="images\Icchapurti Ganesh Mandir.jpg" alt="ICCHAPURTI GANESH MANDIR" />
      </div>
      <div class="card">
        <h3><a href="jcmc bhaunche udyan.php">JCMC BHAUNCHE UDYAN</a></h3>
        <img src="images\JCMC Bhaunche Udyan.jpg" alt="Pratap"/>
      </div>
      <div class="card">
      <h3><a href="mehrun lake.php">MEHRUN LAKE</a></h3>
        <img src="images\Mehrun Lake.jpg" alt="MEHRUN LAKE" />
      </div>
      <div class="card">
      <h3><a href="shree manudevi.php">SHREE MANUDEVI</a></h3>
        <img src="images\Shree Manudevi.jpg" alt="SHREE MANUDEVI" />
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
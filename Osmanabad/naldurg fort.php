<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO naldurgfortcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: naldurg fort.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NALDURG FORT</title>
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
    <h1>NALDURG FORT</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60645.92507075487!2d76.00941167421011!3d18.192898667799774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5a22b89c9a693%3A0x8aec87add8bfeebc!2sOsmanabad%2C%20Maharashtra%20413501!5e0!3m2!1sen!2sin!4v1633605766091!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\Naldurg Fort.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Naldurg which was formerly a district headquarter is situated about 50 Kms. south-east of Osmanabad. The fort which is an interesting place has enclosed a surface of a knoll or plantain of basalt rock which is jutted out into the valley or raving of the small river Bori. Along the rest of the cliff on three sides ran fortifications. bastion firmly built out have deseed basalt and are large enough to carry heavy guns. The entire circumference is about a mile and a half. The interior portion is covered with ruined walls and a half, the interior portion is covered with ruined walls and a vide road running up to the centre. The fort has many bastions amongst which are upli Buruj, which is the height point in the fort paranda Buruj , nagar Buruj, Sangam Burug, Sangram Buruj, Bands Buruj, poone Buruj, etc. Inside the fort there are remains of the walls and some of the building such a Barood kotha, Baradari, Ambarkhana, Rangaan mahal, Jali etc. Though the buildings are in ruins the remains give a impression that there night have been at one time the specious buildings, There are two tanks in the fort known as machali guns amongst which important are the “hathi toph” and magar Toph”, The hathi Darwaza and the hurmukh and the hurmukh darwaza are the main gates of the fort. The most interesting building which connects the fort and the Ranmandala is the dam constructed across the bori river, the dam and the” pani mahal, which is built underaatch and in the middle of the dam were, constructed. During the reign of Ibrahim Adil shah II. The fort is said to have been originally built by a Hindu Raja who was a vassal of the Chalukya kings of kalyani. It was latter included in the dominions of the Bahamanis and was subsequently taken over by the Adil shahi kings of bijapur, from whom it passed in the hands of mughalain the year 1686.A.D.</h3>
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

        $sql = "SELECT * FROM naldurgfortcomment";
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
        <h3><a href="paranda fort.php">PARANDA FORT</a></h3>
        <img src="images\Paranda Fort.jpg" alt="PARANDA FORT"/>
      </div>
      <div class="card">
        <h3><a href="shri tulja bhavani temple.php">SHRI TULJA BHAVANI TEMPLE</a></h3>
        <img src="images\Shri Tulja Bhavani Temple.jpg" alt="SHRI TULJA BHAVANI TEMPLE"/>
      </div>
      <div class="card">
      <h3><a href="terna dam.php">TERNA DAM</a></h3>
        <img src="images\Terna Dam.jpg" alt="TERNA DAM"/>
      </div>
      <div class="card">
      <h3><a href="yedsi ramling ghat wildlife sanctuary.php">YEDSI RAMLING GHAT WILDLIFE SANCTUARY</a></h3>
        <img src="images\Yedsi Ramling Ghat Wildlife Sanctuary.jpg" alt="YEDSI RAMLING GHAT WILDLIFE SANCTUARY"/>
      </div>
      <div class="card">
      <h3><a href="dharashiv caves.php">DHARASHIV CAVES</a></h3>
        <img src="images\Dharashiv Caves.jpg" alt="DHARASHIV CAVES"/>
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
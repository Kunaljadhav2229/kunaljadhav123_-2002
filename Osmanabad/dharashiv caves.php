<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO dharashivcavescomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: dharashiv caves.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DHARASHIV CAVES</title>
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
    <h1>DHARASHIV CAVES</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60645.92507075487!2d76.00941167421011!3d18.192898667799774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5a22b89c9a693%3A0x8aec87add8bfeebc!2sOsmanabad%2C%20Maharashtra%20413501!5e0!3m2!1sen!2sin!4v1633605766091!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="images\Dharashiv Caves.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>The dharashiv caves are situated 8 Kms away from Osmanabad city in Balaghat Mountains. The caves were taken note of by Archaeological Department and mentioned in the book “Archaeological survey of India” by James Verges. There are total 7 caves in the Balaghat Mountain lane. The first cave is without any statue with small open space .The second cave consists of a statue with Artistic work on right side of statue. The art work is of gandharva era. The fourth cave is with open space without any statue inside. The statue in the sixth cave is damaged while the seventh cave has no statue. That this is an ancient place is shown by the caves excavated in the hill at a distance of about eight miles.These caves were originally Buddhist, but were later converted into monuments of the Jain religion and fresh caves were also excavated nearby. Of this we shall speak later. There are some more Buddhist caves excavated in the hills, about 8 miles from Dharashiva. The earlier of them are referred by Burgess to the middle of the 7th century A. D. Cave No. II is modeled on the plan of the Vakataka caves at Ajanta. It has a central hall measuring 80 feet by 80 feet, with 14 cells for the residence of the Bhiksus and garbhagraha with a colossal image of the Buddha in Pamasana. From the hoods of a serpent spread over its head, it is supposed by some to be the image of the Jaina Tirthankara Parshwanath, but the figures of deer with a dharmacakra between them on the pedestal indicate that it is that of Gautama Buddha. Another cave (No. III) has a hall of 59’ by 59’, closely resembling Cave No. I. Later some Jain caves (No. V and VI) were excavated on the same hill. They are described in the Prakrt work Karakandacariu as excavated by the king Karakanda, who came to know about the earlier caves from the prince Siva of Terapura (Tagara).The Karakandacariu is a work of the 11th century A. D. so these later caves were probably excavated in the 9th or 10th century A. D. during the age of Rastrakutas. As per the historical survey of caves they were built in 5th century B.C. There is severe differences between historical researchers & archaeological intelligence regarding religion i.e. whether the caves belongs to Buddha or Jain. There is also strong differences regarding the era of when the caves where built.</h3>
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

        $sql = "SELECT * FROM dharashivcavescomment";
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
        <h3><a href="naldurg fort.php">NALDURG FORT</a></h3>
        <img src="images\Naldurg Fort.jpg" alt="NALDURG FORT"/>
      </div>
      <div class="card">
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
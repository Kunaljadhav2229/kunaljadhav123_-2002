<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO masjidofbilolicomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: masjid of biloli.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MASJID OF BILOLI</title>
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
    <h1>MASJID OF BILOLI</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120610.97074960069!2d77.24581349941565!3d19.147413157877786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605642881!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Masjid Of Biloli.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Masjid Of Biloli is located in Biloli Town on the Nanded - Narsi Highway and is at a distance of 68 kms from Nanded.The Masjid of Biloli is locally known as the Hazrat Nawab Sarfaraz Khan Sahid Masjid. It is said to have been constructed about 330 years back by Sarfaraz Khan. He was an officer in the army of Aurangzeb. The Masjid is an architectural beauty and has Islamic influence. There are four minarets, from where prayers are held on the southern side . These minarets collapsed when it was hit by a lightening in 1960 but was later restored by the Government. The one on the north has eight chains. Below the chains is a figure in the shape of a bell. The tops of the minarets are made with some alloy, probably brass and is in a half crescent shape. To the north-west corner of the Masjid is a square shaped well called a barrow. The barrow serves as a water source and it supplies water for the day to day functioning of the Masjid. It also plays an important role during the breaking of fast or roza. There are numerous steps leading to the well. There is beautiful Belgian glass lining the windows of the Masjid. There is also a central spacious courtyard where numerous pigeons are found when namaaz is not held. There are inscriptions in Urdu made out of marble and granite, testimony to the skill of the workers. The arches have delicate jaali work which help in screening. There are also numerous graceful arches which serve as a gateway to the courtyard. There are rich designs on the roof of the Masjid. The roof is supported by stone ledges which are overhanging yet is balanced. The devotees can ecircle the entire Majid which is now lined with steel railings . The Hindu influences can be seen by a many petalled flowers carving on the wall of the Masjid which is a deviation from the geometric and abstract Islamic motifs.
The Masjid of Biloli is worth a visit by all devout Muslims as well as those who aprreciate splendid architecture. Visitors to the Masjid will love its spacious courtyards where namaaz prayers are held during the holy months of Ramzan. During the holy months of Ramzan the Masjid the Masjid is thoroughly spruced up. Even the guards and the caretakers are very friendly and accomodating. The best season to visit the Masjid is during the cooler months of October - March.
The Masjid of Biloli is very accomodating to people of all faiths. Although shoes are not worn inside during namaaz you can still walk barefoot and witness the spirituality the Masjid evokes. There are also many stalls outside selling cheap local food. The Masjid remains open on all days of the week during timings 7:00 AM - 6:30 PM.
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

        $sql = "SELECT * FROM masjidofbilolicomment";
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
      <h3><a href="kaleshwar mandir.php">KALESHWAR MANDIR</a></h3>
        <img src="images\Kaleshwar Mandir.jpg" alt="KALESHWAR MANDIR"/>
      </div>
      <div class="card">
        <h3><a href="kandhar fort.php">KANDHAR FORT</a></h3>
        <img src="images\Kandhar Fort.jpg" alt="KANDHAR FORT"/>
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
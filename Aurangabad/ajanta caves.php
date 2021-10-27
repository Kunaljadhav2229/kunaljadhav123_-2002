<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO ajantacavescomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: ajanta caves.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AJANTA CAVES</title>
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
    <h1>AJANTA CAVES</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120073.07457559!2d75.23516001307195!3d19.870244014978873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9815a369bc63%3A0x712d538b29a2a73e!2sAurangabad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633604094153!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Ajanta Caves.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>The Buddhist Caves in Ajanta are approximately 30 rock-cut Buddhist cave monuments dating from the 2nd century BCE to about 480 CE in the Aurangabad district of Maharashtra state in India.The caves include paintings and rock-cut sculptures described as among the finest surviving examples of ancient Indian art, particularly expressive paintings that present emotions through gesture, pose and form.They are universally regarded as masterpieces of Buddhist religious art. The caves were built in two phases, the first starting around the 2nd century BCE and the second occurring from 400 to 650 CE, according to older accounts, or in a brief period of 460–480 CE according to later scholarship.The site is a protected monument in the care of the Archaeological Survey of India, and since 1983, the Ajanta Caves have been a UNESCO World Heritage Site.The Ajanta Caves constitute ancient monasteries and worship-halls of different Buddhist traditions carved into a 75-metre (246 ft) wall of rock.The caves also present paintings depicting the past lives and rebirths of the Buddha, pictorial tales from Aryasura's Jatakamala, and rock-cut sculptures of Buddhist deities.Textual records suggest that these caves served as a monsoon retreat for monks, as well as a resting site for merchants and pilgrims in ancient India.While vivid colours and mural wall-painting were abundant in Indian history as evidenced by historical records, Caves 16, 17, 1 and 2 of Ajanta form the largest corpus of surviving ancient Indian wall-painting.Panoramic view of Ajanta Caves from the nearby hill. The Ajanta Caves are mentioned in the memoirs of several medieval-era Chinese Buddhist travellers to India and by a Mughal-era official of Akbar era in the early 17th century. They were covered by jungle until accidentally "discovered" and brought to Western attention in 1819 by a colonial British officer Captain John Smith on a tiger-hunting party.The caves are in the rocky northern wall of the U-shaped gorge of the river Waghur, in the Deccan plateau.Within the gorge are a number of waterfalls, audible from outside the caves when the river is high.With the Ellora Caves, Ajanta is one of the major tourist attractions of Maharashtra. It is about 6 kilometres (3.7 miles) from Fardapur, 59 kilometres (37 miles) from the city of Jalgaon, Maharashtra, India, 104 kilometres (65 miles) from the city of Aurangabad, and 350 kilometres (220 miles) east-northeast of Mumbai. Ajanta is 100 kilometres (62 miles) from the Ellora Caves, which contain Hindu, Jain and Buddhist caves, the last dating from a period similar to Ajanta. The Ajanta style is also found in the Ellora Caves and other sites such as the Elephanta Caves, Aurangabad Caves, Shivleni Caves and the cave temples of Karnataka.
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

        $sql = "SELECT * FROM ajantacavescomment";
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
        <h3><a href="bibi ka maqbara.php">BIBI KA MAQBARA</a></h3>
        <img src="images\Bibi Ka Maqbara.jpg" alt="BIBI KA MAQBARA"/>
      </div>
      <div class="card">
      <h3><a href="chand minar.php">CHAND MINAR</a></h3>
        <img src="images\Chand Minar.jpg" alt="CHAND MINAR"/>
      </div>
      <div class="card">
        <h3><a href="chhatrapati shivaji maharaj museum.php">CHHATRAPATI SHIVAJI MAHARAJ MUSEUM</a></h3>
        <img src="images\Chhatrapati Shivaji Maharaj Museum.jpg" alt="CHHATRAPATI SHIVAJI MAHARAJ MUSEUM"/>
      </div>
      <div class="card">
      <h3><a href="daulatabad fort.php">DAULATABAD FORT</a></h3>
        <img src="images\Daulatabad Fort.jpg" alt="DAULATABAD FORT"/>
      </div>
      <div class="card">
      <h3><a href="ellora caves.php">ELLORA CAVES</a></h3>
        <img src="images\Ellora Caves.jpg" alt="ELLORA CAVES"/>
      </div>
      <div class="card">
      <h3><a href="grishneshwar temple.php">GRISHNESHWAR TEMPLE</a></h3>
        <img src="images\Grishneshwar Temple.jpg" alt="GRISHNESHWAR TEMPLE"/>
      </div>
      <div class="card">
      <h3><a href="panchakki.php">PANCHAKKI</a></h3>
        <img src="images\Panchakki.jpg" alt="PANCHAKKI"/>
      </div>
      <div class="card">
      <h3><a href="siddharth garden and zoo.php">SIDDHARTH GARDEN AND ZOO</a></h3>
        <img src="images\Siddharth Garden and Zoo.jpg" alt="SIDDHARTH GARDEN AND ZOO"/>
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
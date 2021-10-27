<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO nandedfortcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: nanded fort.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NANDED FORT</title>
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
    <h1>NANDED FORT</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120610.97074960069!2d77.24581349941565!3d19.147413157877786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605642881!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Nanded Fort.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Nanded Fort is a historical structure and a fort located in Nanded. It is quite close to Nanded city center at a distance of 2. 5 km from it. Nanded Fort is located beside the River Godavari and is enclosed by it on three sides. Located on the Qilla Road in the Marathwada region, the Nanded Fort was built by the Nanda dynasty in the 6th century. The Fort was made so as to serves as a lookout in case of invasion from enemies and to save the people of Nanded from repeated conquests. The Fort is situated on a hill and it overlooks the countryside giving it strategic importance. The Fort was once quite impregnable. The fort is in ruins due to repeated vandalisation by the Mughals. It is made out of solid stones and hardened wood studded with nails. The roof of the Fort is lined with positions for archers. There are also many passages for the smooth movement of troops. Inside the Fort, there is a large courtyard with many graceful archways. The archways are constructed in the typical Indian style with notably some Buddhist influences. The archways lead to many staircases leading to various parts of the Fort. The Fort is located in an enchanting place with many sprawling gardens surrounding it. There are also many stone rooms for storage of arms and rations during a siege. There is a water tank similar to the one found in Mohenjo Daro with stone steps leading to it which suggests that there was some connection between ancient India and the Harappan civilisation. This tank also supplied water for local irrigation practices resulting in bountiful harvests recorded in many historical texts such as the Leela Charitra. So, the architects who constructed this Fort had kept everything in mind with even undeground passages for the safe escape of the King. Later, this tank was repaired by the Nizam government and it still fulfills the drinking needs of the city. There are four bastions and a cannon. The local muncipality or the NWCMC has invested a lot on its upkeep and also started construction of a museum to show the rich history of the Fort.
The Fort is extremely popular with history buffs. Even if the fort is in ruins many people still go to visit it. It is a very popular leisure spot among locals who spend their time sitting at the ruins and watching the sunset. Although most of the ruins are off limits to the tourists you can still watch the sunset from a quiet place. Also, the flow of the Godavari is very mesmerising. It is best to visit the place during winters from October - January as the stones can get very hot.
Nanded Fort finds immense importance due to its unique position in history. . It is visited by architecture lovers and those with a passion for photography. There are large swathes of agricultural lands surrounding it, which turn green after the monsoons making it a really beautiful photogenic experience. There Fort remains open throughout the day, usually with timings 9:00 AM - 7:00 PM. There are no entry fees for visiting this Fort.
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

        $sql = "SELECT * FROM nandedfortcomment";
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
      <h3><a href="masjid of biloli.php">MASJID OF BILOLI</a></h3>
        <img src="images\Masjid Of Biloli.jpg" alt="MASJID OF BILOLI"/>
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
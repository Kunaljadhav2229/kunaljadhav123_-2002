<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO sikhmuseumcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: sikh museum.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIKH MUSEUM</title>
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
    <h1>SIKH MUSEUM</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120610.97074960069!2d77.24581349941565!3d19.147413157877786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605642881!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Sikh Museum.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Sikh museum is located in Vazirabad, nanded, Maharashtra. This museum is located near the bank of a river, and is within the city centre of Nanded. Sikh Museum is considered as the pride of the city Nanded. This is a state-of-the-art museum which has been constructed by the Union Ministry of Tourism. The purpose of constructin this museum was to mark the celebration of 300th anniversary of Gurta Gaddi Diwas. The museum is spread in an area of 30,000 square feet. The museum is laden with high technology equipments, it has touch screen systems, latest gadgets and many new attractions. It has empolyed animation and graphics strategies and technologies which are used for passing the messages of Sikh Gurus to youth and especially to those living abroad, in order to save them from the influence of ever-increasing western culture. Special facility of providing information about the sikh religion and culture, in either hindi, english, punjabi or marathi is also being availed by the authorities. There are arts galleries spread in an area of 13000 square feet, which showcases the heavenly journey of Tenth Guru of Sikh religion Shri Guru Gobind Singh Ji, and Guru Garnath Sahib. The musuem building is 3 storey high which has 13 exhibit galleries of 144 square metres each, it has a multi-purpose hall, a library and other office spaces. The total area in which the museum is built is spread in around 11 acres of land. The museum premise has lush green garden and fountains around it. Being located on the river bank of Godavari, a riverfront has also been developed, there are 100 feet wide roads constructed on both sides of the river.
Sikh Museum is a must visit for everyone, especially religious people, history enthusiasts as well as children. This museum is set in a very beautiful location, which attracts a lots of tourists throughout the year. The galleries narrate the stories of the ten Gurus, the making and importance of Eternal Guru Granth Sahib and the journey of the faith till today. The journey to Nanded is considered incomplete without visiting this magnificient master-piece. And the visit to this museum is worth it. It is a perfect place for weekend outings with friends and family. People usually spend around 1-2 hours at the museum. It would be a great to visit this museum in the evening hours from 4:00 P. M to 5:00 P. M as the sunset from here looks magnificeint. The musuem has basic facilities of bathroom and drinking water for the visitors. There is ample amount of parking space available for two and four wheeler vehicles.</h3>
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

        $sql = "SELECT * FROM sikhmuseumcomment";
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
      <h3><a href="nanded fort.php">NANDED FORT</a></h3>
        <img src="images\Nanded Fort.jpg" alt="NANDED FORT"/>
      </div>
      <div class="card">
      <h3><a href="sahastrakund waterfall.php">SAHASTRAKUND WATERFALL</a></h3>
        <img src="images\Sahastrakund Waterfall.jpg" alt="SAHASTRAKUND WATERFALL"/>
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
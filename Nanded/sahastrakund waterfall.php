<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO sahastrakundwaterfallcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: sahastrakund waterfall.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SAHASTRAKUND WATERFALL</title>
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
    <h1>SAHASTRAKUND WATERFALL</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120610.97074960069!2d77.24581349941565!3d19.147413157877786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605642881!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Sahastrakund Waterfall.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Sahastrakund Waterfall is a very famous tourist attraction near Nanded. It is situated just 97. 9 kms away from Nanded city center.The Sahastrakund Waterfall is in the Nanded district of Maharashtra. It is a very popular destination among the tourists. It is famous for its beauty and uniqueness. The waterfall is in the Penganga river and is situated on the border of Yavatmal and Nanded. The beauty is one of the main factors that attract the crowd here. The water falling from 50 feet and as the water descends it turns into a fog like dew. And the base of the waterfall is always covered with this fog and it makes a beautiful scenery. During the monsoons, the waterfall comes into full swing and the view becomes even more serene. As the water falls from the top it splashes on the black rocks and by the time it reaches the bottom, the water is foamed and is white and is beautiful. The water is clear and is pure as it comes, the Penganga is a tributary and as a result, the waterfall is very close to its origin and that is the reason for its water to be so pure. The view from the watch tower is just impeccable. That view will definitely impress anyone. It is one of those places which is famous for its beauty, but is not over-crowded.The Sahastrakund waterfall is one of the most beautiful waterfalls in Maharashtra. The waterfall is very popular among tourists as well as locals. The monsoon is the best season to visit this place as the water level of the river rises during this season and makes the waterfall even more beautiful. During the summer, the waterfall wont be dry but rather, the visitors can only see like a certain amount of the beauty of the waterfall as the water would be shallow. The waterfall against the lush green backdrop is one of the most beautiful views and this is not to be missed. This kind of a waterfall is very rare in Maharashtra. It is not advised to swim in this area due to the presence of sharp rocks and heavy flow of the water. During monsoons, the water becomes more dangerous to swim in. But for sightseeing, this place is the best.The Sahastrakund waterfall is one of those places where can spend a day amidst nature. The place is serene with the most natural settings. The visitors can see this place in full swing during the monsoon. The place is very suitable to spend a day with your friends and family. It is open to visitors throughout the year, but the best view is during the monsoon. The most suitable timings for visit is betweem 6:00 AM - 6:00 PM. The view is incredible and the visitors should go to the bridge as well as the watch tower as they both offer incredible views of the place.</h3>
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

        $sql = "SELECT * FROM sahastrakundwaterfallcomment";
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
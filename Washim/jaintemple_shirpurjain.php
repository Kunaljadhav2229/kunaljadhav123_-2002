<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO jaintemple_shirpurjaincomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: jaintemple_shirpurjain.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JAIN TEMPLE SHIRPUR JAIN</title>
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
    <h1>JAIN TEMPLE SHIRPUR JAIN</h1>

    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59943.66729085644!2d77.08911093295569!3d20.11404599201452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd0e3a62192cac5%3A0xaff70c028eb32b0b!2sWashim%2C%20Maharashtra%20444505!5e0!3m2!1sen!2sin!4v1633606242622!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <img src="image\jain_temple.jfif" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Here's are many temple as we can see here. One of the very ancient and big temple is antriksh parshivnath jain mandir. It is located in middle of Shirpur jain. And there is going on a new huge construction in Paras bagh. There is building a new jain mandir of marbles stone. That's is very big and great construction. Great Architect we can found in it. At the East direction we can find a peaceful place that is Jangir Maharaj Sansthan. That's is Hindu temple it's a very clean place and nice atmosphere is here. At South direction of Shirpur there is a nice temple named as Aai Bhavani Sansthan. At the North Direction Belsari Mahadev Mandir is there. That's not big temple. And Lakdoba Maharaj Sansthan is also there. At the West direction there is Khandoba Sansthan and mirza miya Dhargha. Dhargha is such a nice place.That's a peaceful place. And Pavali mandir is also there. That is such ancient temple having great architect in it. Many tourists came in Shirpur to get visit at Pavli mandir and Jain mandir. All the temple that's I mentioned in review you can check all them on Map. Other temple's are also in Shirpur but that's are minnor or small. Like Savta mali mandir, Dnyaneshwar Maharaj mandir, Jama majid, Balaji mandir, Vitthal mandir, Naghnath maharaj mandir, Vishwakarma mandir, etc such temple. That's why Shirpur is so great place. Bus stand is available at Shirpur, But that is not constructed that is only seating arrangement is not available here. 

      Each and every bus passing from Shirpur get a shop at bus stand. Buses available to direct to jintur, akola, shegaon, akot, paratwada, risod, malegaon, parbhani, patur, medshi, etc cities. In Shirpur there are 2 petroleum pumps. Which are very helpful for villagers. Mostly types of shops you can get find in Shirpur. There's is no logging system here. But for people's who camed in jain mandir had a staying place as Dharamshala [Sanctuary]. Electronic, Hardware, Clothes, hospitals, daily needs, agro shops, etc. many Shops are here. Government places like Gram panchayat, government hospital, registration office, Police station, etc are in Shirpur jain. Here is not a branch of State bank of India but having Ghrahak seva kendra of SBI. Others bank like Bank of Maharashtra, Buldhana urban, Nishant bank, Akola madhwarti bank, Janta bank, Kokan Visharbha gramin bank, Risod urban, etc. ATM are available of some banks. Hence my village i.e. Shirpur is such a nice place.


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

        $sql = "SELECT * FROM kaaspatharcomment";
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
        <h3><a href="ram_temple.php">RAM TEMPLE</a></h3>
        <img src="image\ram_temple.jfif" alt="kaas" />
      </div>
      <div class="card">
      <h3><a href="daridrya_harana_tirth.php">DARIDRYA HARANA TIRTH</a></h3>
        <img src="image\daridrya_harana_tirth .jfif" alt="Maha" />
      </div>
      <div class="card">
        <h3><a href="padmateerthashiva_temple.php">PADMA TEERTHA SHIVA TEMPLE</a></h3>
        <img src="image\padma_teerthashiva_temple.jfif" alt="Pratap" />
      </div>
      <div class="card">
      <h3><a href="poharadevi_temple.php">POHARADEVI TEMPLE</a></h3>
        <img src="image\poharadevi_temple.jfif" alt="gad" />
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
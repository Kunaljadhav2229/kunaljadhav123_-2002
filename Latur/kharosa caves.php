<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO kharosacavescomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: kharosa caves.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KHAROSA CAVES</title>
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
    <h1>KHAROSA CAVES</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60572.347398375714!2d76.53194782511771!3d18.403238187324483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf83bd7132cd29%3A0x83629bac5848da3e!2sLatur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605392076!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Kharosa Caves.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Among one of those famous tourist spots in Latur is the very popular Kharosa Caves. The caves are situated in the village of Kharosa which is about 45 kms away from the city center of Latur. On reaching Latur, visitors can opt for public transport or they can even book a cab and directly reach to the destination. It takes around 1 hour to reach the place via road.Kharosa Caves is a very important historic monument in the ancient historic period of India. It is among one of the popular heritage of the country. It was built in 6th century during the reign of Gupta period. Kharosa Caves have a total number of 12 caves inbuilt in it. The caves are popular for its beautiful and artistic sculptures of Lord Shiv-Parvati, Ravana, Lord Narasimha, Lord Kartikeya and many more in it. The Kharosa Caves clearly depict the great architectural and distinct features of the Gupta period. Each cave has some amazing distinct feature which is unique and one of a kind. The place is visited by thousands of tourist every year.The first cave of Kharosa is a Buddhist cave which has a painted statue of Lord Buddha in sitting position. Other caves have Shiv Ling, which is dedicated to Lord Shiva and one of them has a sculpture of Lord Dutta. The sculpture of a Yaksha just outside one of the Kharosa Cave is a popular attraction among tourists and history travellers. The Shiv Ling cave is visited by many tourists and devotees to seek the blessings from Lord Shiva. There is also a Renuka Devi Temple situated on the other side of the hill which is also visited by many tourists and local people. The 4th and 5th caves have two floors and the ground floor is constructed just below ground level from where the middle floor can be accessed. There is also an upper hall at Kharosa Caves that can be reached through a narrow staircase which has a number of Vishnu and Shiv-Parvati idol which looks so fascinating and has a unique charm of history and heritage.There is a source of water on the top side of the hill known as Seeta Nhani or Seeta's Bathroom which is also one of the popular destinations for the tourists. The caves of Kharosa has distinct color and attractive features from the rest of the caves in India which makes it distinct and one of a kind.Kharosa Caves are open all around the year for the visitors to explore. But, it is advised to visit the caves during the winter season as the weather of the place during the winter season is more convenient for a visit. 
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

        $sql = "SELECT * FROM kharosacavescomment";
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
        <h3><a href="ausa fort.php">AUSA FORT</a></h3>
        <img src="images\AusaFort.jpg" alt="AUSA FORT"/>
      </div>
      <div class="card">
      <h3><a href="gunj golai.php">GUNJ GOLAI</a></h3>
        <img src="images\Gunj Golai.jpg" alt="GUNJ GOLAI"/>
      </div>
      <div class="card">
      <h3><a href="nana nani park.php">NANA NANI PARK</a></h3>
        <img src="images\Nana Nani Park.jpg" alt="NANA NANI PARK"/>
      </div>
      <div class="card">
      <h3><a href="surat shah wali dargah.php">SURAT SHAH WALI DARGAH</a></h3>
        <img src="images\Surat Shah Wali Dargah.jpg" alt="SURAT SHAH WALI DARGAH"/>
      </div>
      <div class="card">
      <h3><a href="udgir fort.php">UDGIR FORT</a></h3>
        <img src="images\Udgir Fort.jpg" alt="UDGIR FORT"/>
      </div>
      <div class="card">
      <h3><a href="vrindavan amusement park.php">VRINDAVAN AMUSEMENT PARK</a></h3>
        <img src="images\Vrindavan Amusement Park.jpg" alt="VRINDAVAN AMUSEMENT PARK"/>
      </div>
      <div class="card">
      <h3><a href="wadwal nagnath bet.php">WADWAL NAGNATH BET</a></h3>
        <img src="images\Wadwal Nagnath Bet.jpg" alt="WADWAL NAGNATH BET"/>
      </div>
      <div class="card">
      <h3><a href="ashtavinayak temple.php">ASHTAVINAYAK TEMPLE</a></h3>
        <img src="images\Ashtavinayak Temple.jpg" alt="ASHTAVINAYAK TEMPLE"/>
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
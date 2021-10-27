<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO hazursahibcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: hazur sahib.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HAZUR SAHIB</title>
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
    <h1>HAZUR SAHIB</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120610.97074960069!2d77.24581349941565!3d19.147413157877786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605642881!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Hazur Sahib.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Hazur Sahib Nanded is one of the five 'takhts' in Sikhism. It is the second most important gurudwara for the Sikhs after the Golden Temple. This holy place of Sikhs is widely known for its peace and influence in the social belief of the Sikhs. This religious place of the Sikhs attracts lots of Sikh people worldwide to seek blessings here. Not only Sikhs, other religions of people can also go there to experience the beauty and the peace. Right from the time of entering into the area of this place, the huge white Sikh architecture will soothe the mind. Peace and calm will be injected into the mind. People can sense a strong feeling of religion here. This sacred place is not very far from the center of the city Nanded in Maharashtra. It is only 2 to 3 kilometer away from the center of Nanded.This historical and iconic place of Sikhism is located on the banks of the river Godavari. 'Hazur Sahib' means the presence of the lord. This religious place Hazur Sahib is also called Takht Sachkhand Sri Hazur Abchalnagar Sahib. This is one of the five major akal takhts in Sikhism. Within the complex there is a 'Gurudwara' which is also known as 'Sach Khand', which means 'A Region of Truth'. The inner room of the Gurudwara is known as 'Angitha Sahib' and Guru Gobind Singh Ji was cremated here at 1708. In the last decade of his ruling time, Maharaja Ranjit Singh built this great place. This was built between 1832 to 1837. This place bears an interesting and sad history of the death of Guru Gobind Singh Ji. In 1708, Guru Gobind Singh Ji has his camp here. He was attacked by two assassins. One of the attackers stabbed the Guruji. This attacker was killed by a single stroke of Guruji's Talwar. The second attacker was killed by Guruji's followers when he tried to escape. However, an English doctor treated and stitched the wound of Guruji. Though after some time, it became much more dangerous and Guruji died of it after declaring Guru Granth Sahib Ji as his successor. The Sikhs built a room where Guru Gobind Singh Ji would sit and installed Guru Granth Sahib in it. 300th anniversary of Guru Granth Sahib took place here in 2008. This marvelous huge complex of Gurudwara at Hazur Sahib is carrying this history in every pillar of it. This shrine has a difference from other four akal takhts of Sikh worship. The difference is here all ancient customs which were practised at the time of the Guru Ji are still kept and practiced too. For example, sandal wood tilak is still applied on the foreheads of priests and local devotees who seek blessings. The most important part of this holy shrine is that it has two sanctum and sanctorum here. In the outer room all the disciplines and functions are carried out by the priests. But, in the inner room, a lot of priceless objects can be found. Various weapons, personal belongings of the Guru Ji can also be found here. Though this is a secret room and none except the head priest of the Gurudwara can enter this room. After all this religious historical background of Hazur Sahib Nanded, its architecture style and huge size astonish people very much. It consists of very beautiful marble architecture with gold etching. Inner side is completely decorated with Silver and Gold, and outer main shrine top most portion is coated with Gold Sheets. Its beautiful view in night lamps, when this gold shines and seen from far. Main entrance is very beautiful and made with engraving with colored stones in Marble. This is a marvelous structure with about 750 rooms built in the four walls surrounding the main shrine in the center meant for staying purpose of the devotees. Moreover, it is peaceful and nice atmosphere here. In every evening, Kirtanas are played which are mesmerizing and create a peaceful and calm atmosphere to give peace to the inner soul.Nanded's climate is quite extreme with scorching summers and cold winters. The winter season in Nanded can be quite frosty, but this is the only preferable time to visit the Hazur Sahib. The winter season spans from November to February. Tourists are advised to carry thick woolen clothes to beat the chills. Free food at the langar is always given to the common people. The accommodation is given too at a very low cost. Rooms for pilgrims' accommodation are well designed and very well maintained. There are both AC and Non AC rooms. There is also a laser ray show held at Gobind Bagh near the main gurudwara. In this show the lives of the ten Gurus are briefly described. It is the second largest laser show in Asia.There are no such rigid timings here in Hazur Sahib Nanded. It remains open 24 hours. The most preferred time to visit here is the afternoon and the evening time. In evening, Kirtana and patha are played here which can be a great thing to listen. People can visit here at the late night at about 3:00 AM for 'ardas'. Aarti starts at 7:00 PM in the evening. To have a good view of Aarti one must has to be present in Gurudwara by 6:30 PM. After Aarti shastras of Guru Gobind Singh Ji are displayed. This is followed by laser show at Gobind bagh. There are various food stalls outside which offers lavish foods to the hungry tourists. Personal belongings have to be kept in the locker before entering the main gurudwara. People can come along with family and friends to enjoy this Sikh architectural beauty.</h3>
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

        $sql = "SELECT * FROM hazursahibcomment";
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
      <h3><a href="sikh museum.php">SIKH MUSEUM</a></h3>
        <img src="images\Sikh Museum.jpg" alt="SIKH MUSEUM"/>
      </div>
      <div class="card">
      <h3><a href="visava garden.php">VISAVA GARDEN</a></h3>
        <img src="images\Visava Garden.jpg" alt="VISAVA GARDEN"/>
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
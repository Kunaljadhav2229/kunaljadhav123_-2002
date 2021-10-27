<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO kandharfortcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: kandhar fort.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KANDHAR FORT</title>
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
    <h1>KANDHAR FORT</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120610.97074960069!2d77.24581349941565!3d19.147413157877786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d66bb9d31721%3A0x43892c180155daf1!2sNanded%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605642881!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Kandhar Fort.jpg" width="670" height="300"/>
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>Kandhar Fort is located in Kandhar town, at a distance of 55 kms from Nanded.
Kandhar Fort was constructed by the Rashtrakuta King Krishna III of Malkhed who was also known as Kandharpuradhi Swar. Marathwada had lots of land forts and this is one of them. It is built over an extensive area covering 18 acres. It is located beside the river Manya and lush green hills surround it. There is a ditch filled with water encircling the Fort, built to keep out invaders and it has a fortified structure. Apart from its strong structure, the fort is known for its famous spots like Jinsi Gate and the Machali Gate. It was constructed a thousand years ago probably in the 13th century. The Fort changed hands from the Rashtrakuta clan to the the Jain Ganga Dynasty and then the Marathas, the Moghuls, and finally the Nizams of Hyderabad. Every Dynasty has left its mark on the Fort by repeated addition and destruction of other features. We can see the religious influences of many religions. Hindu, Muslim as well as Jain schools of architecture are present testimony to the numerous change of hands. The ruins of this majestic and historic fort are really awe inspiring with its magnificent architecture. Broken figures of Buddha and Mahaveera welcome you as you enter. There are canons on the roof of the Fort which have surprisingly not rusted much over the years. There is also a well with steps leading to it which serves its purpose as a Rain Water Harvesting basin. The Ramparts are still strong and walking along the walls give us a panoramic view of the surroundings and the countryside. Currently huge renovation projects are going on. Lots of old structures are available to see. One of the great things is ancient sculptures are placed at the entrance which shows the repeated invasions and the change of hands of this fort. Under foreign invaders rule, lots of changes were made and a Masjid was also built. The Kandhar Fort had a few statues and there is long walk on the fortification wall. The municipal committee of Nanded has undertaken a lot of construction work for the renovation and beautification of the Fort. This well fortified Fort is really well maintained and has multiple wells, many silos for food grain (served as a storage during a siege or a famine) and could house thousands inside. Also, stands tall is a clock tower which overlooks place which was once surrounded by the common market area outside the fort. The presence of many temples outside the fort also support the fact that it was an important stronghold. Lal Mahal and Darbar Mahal in the Kandhar Fort are also worth a visit. A beautiful water tank with fountains and the surrounding garden are now the remains of the once great empires and show the lavish lifestyle led by the Kings. Amongst the all the heritage structures in the fort, the most beautiful is the Ambar Khana and Sheesh Mahal. The Sheesh Mahal is a double storied building constructed at the same site where the Rashtrakuta Royal Palace existed. The Sheesh Mahal is probably the Rani Mahal of the Tughlaq and Bahmani sultans. Also, the fort features many sculptures which were probably done by the skilled masons. Amongst them, the most noteworthy remains the huge yaksha vastupurush sculpture of a man measuring 60 feet in height.
The Kandhar Fort is a must visit to know important aspects of Indian history. The Kandhar Fort throws important light on the rise and fall of the different dynasties which ruled the Southern part of India. It also serves as a reference to the cultural achievements and the peace and stability that was achieved which is found by the silos and the well. The sunset from the rooftop is very beautiful as it gives an unhindered view of the surroundings and hence is a boon for photographers. Although during rainy seasons there is huge water flow through the fort, so the best time to visit the Kandhar Fort is from October - March.The Kandhar Fort is a family friendly place with lots of options for everyone. The visit to the Fort can be combined with the visit to the Ranthambore National Park which is quite nearby. Also, outside the Kandhar fort at some distance is a hillock on which an old Idgah is situated which is revered by the Muslims. It is of Nizamshahi period with two domes in characteristic Ahmednagar style. The Fort can be visited during timings 8:00 AM - 7:00 PM.</h3>
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

        $sql = "SELECT * FROM kandharfortcomment";
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
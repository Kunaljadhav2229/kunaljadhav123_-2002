<?php

include 'config.php';

error_reporting(0); // For not showing any error


if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO trimbakeshwarcomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
   
    echo "<script>alert('Comment added successfully.')
    
    </script>";
    header("location: trimbakeshwar.php");
  } else {
    echo "<script>alert('Comment does not add.')</script>";
   
  }
  
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TRIMBAKESHWAR</title>
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
    <h1>TRIMBAKESHWAR</h1>
    <div class="left-column">
      <div class="card"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.26415065836!2d73.73343941541243!3d19.99111062220371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1633605727912!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
      <img src="images\Trimbakeshwar.jpg" width="670" height="300" />
      <div class="center">
      <h2>INFORMATION</h2>
      <h3>
      Trimbakeshwar Simhastha is a Hindu religious mela held every 12 years
in the Nashik district of Maharashtra, India. The name of the festival is also transliterated
 as Sinhastha or Singhastha. It is one of the four fairs traditionally recognized as Kumbha 
Melas, and is also known as Nashik-Trimbak Kumbha Mela or Nashik Kumbha Mela.
Kumbh Mela or Kumbha Mela is a major pilgrimage and festival in Hinduism.
It is celebrated in a cycle of approximately 12 years, to celebrate every revolution 
Brihaspati (Jupiter) completes, at four river-bank pilgrimage sites: the Allahabad (Prayagraj) 
(Ganges-Yamuna-Sarasvati rivers confluence), Haridwar (Ganges), Nashik (Godavari), and 
Ujjain (Shipra).The festival is marked by a ritual dip in the waters, but it is also a celebration
 of community commerce with numerous fairs, education, religious discourses by saints, 
mass feedings of monks or the poor, and entertainment spectacle.The seekers believe 
that bathing in these rivers is a means to prāyaścitta (atonement, penance) for past mistakes,
and that it cleanses them of their sins.The festival is traditionally credited to the 8th-century 
Hindu philosopher and saint Adi Shankara, as a part of his efforts to start major Hindu gatherings
 for philosophical discussions and debates along with Hindu monasteries across the Indian 
subcontinent.However, there is no historical literary evidence of these mass pilgrimages 
called "Kumbha Mela" prior to the 19th century. There is ample evidence in historical manuscripts
 and inscriptions of an annual Magha Mela in Hinduism – with periodic larger gatherings after 
6 or 12 years – where pilgrims gathered in massive numbers and where one of the rituals included
 a sacred dip in a river or holy tank. According to Kama MacLean, the socio-political developments 
during the colonial era and a reaction to Orientalism led to the rebranding and remobilisation of the
 ancient Magha Mela as the modern era Kumbh Mela, particularly after the Indian Rebellion of 1857.
The weeks over which the festival is observed cycle at each site approximately once every 12 years 
based on the Hindu luni-solar calendar and the relative astrological positions of Jupiter, the sun and 
the moon. The gap between Prayag and Haridwar festivals is about 6 years, and both feature a Maha(full) 
& Ardha(half) Kumbh Melas.The Kumbh Melas have three dates around which the significant majority 
of pilgrims participate, while the festival itself lasts between one to three months around these dates.
Each festival attracts millions, with the largest gathering at the Prayag Kumbh Mela and the second
 largest at Haridwar.According to the Encyclopaedia Britannica, 60 million Hindus gathered for 
the Kumbh Mela in 2001.The festival is one of the largest peaceful gatherings in the world, and 
considered as the "world's largest congregation of religious pilgrims".It has been inscribed on 
the UNESCO's Representative List of Intangible Cultural Heritage of Humanity.The festival is 
observed over many days, with the day of Amavasya attracting the largest number on a single day. 
The Kumbh Mela authorities said that the largest one-day attendance at the Kumbh Mela was 30 million 
on 10 February 2013 and 50 million on 4 February 2019.
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

        $sql = "SELECT * FROM trimbakeshwarcomment";
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
        <h3><a href="muktidham.php">MUKTIDHAM</a></h3>
        <img src="images\Muktidham.jpg" alt="MUKTIDHAM" />
      </div>
      <div class="card">
      <h3><a href="saptashrungi.php">SAPTASHRUNGI</a></h3>
        <img src="images\Saptashrungi.jpg" alt="SAPTASHRUNGI" />
      </div>
      <div class="card">
        <h3><a href="sula vineyards.php">SULA VINEYARDS</a></h3>
        <img src="images\Sula Vineyards.jpg" alt="SULA VINEYARDS"/>
      </div>
      <div class="card">
      <h3><a href="trirashmi caves.php">TRIRASHMI CAVES</a></h3>
        <img src="images\Trirashmi Caves.jpg" alt="TRIRASHMI CAVES" />
      </div>
      <div class="card">
      <h3><a href="kumbha mela.php">KUMBHA MELA</a></h3>
        <img src="images\Kumbha Mela.jpg" alt="KUMBHA MELA" />
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
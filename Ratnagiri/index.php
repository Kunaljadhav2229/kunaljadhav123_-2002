<?php

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO sataracomment (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/545d8b5bdc.js" crossorigin="anonymous"></script>
	<script>

	</script>
	<script>
		function openfacebook() {
			window.open("https://www.facebook.com/varun.sheth.900/");
		}
	</script>
	<script>
		function openTwitter() {
			// body...
			window.open("https://twitter.com/varunsheth01");
		}
	</script>
	<script>
		function openInstagram() {
			window.open("https://www.instagram.com/varun_sheth_/");
		}
	</script>
	<title>Travel</title>
</head>

<body>
	<div id="wrapper" class="wrapper">
		<header>
			<h2 class="logo">Travel Guide</h2>
			<div class="toggle"></div>
			<div class="menu ">
				<ul>
					<li><a href="#">Explore</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Contact</a></li>
					<li>
						<form class="example">
							<a><input type="text" placeholder="Search.." name="search">
								<button type="submit"><i class="fa fa-search"></i></button>
							</a>
						</form>
					</li>
				</ul>
			</div>
			<script>
				const menuToggle = document.querySelector('.toggle');
				const showcase = document.querySelector('.menu');
				menuToggle.addEventListener('click', () => {
					menuToggle.classList.toggle('active')
					showcase.classList.toggle('active');
				})
			</script>
		</header>
		<section class="section__intro">
			<video autoplay="true" muted="true" loop="true">
				<source src="bg1.mp4" type="video/mp4">
			</video>
			<div class="quote">
				<h2>Never Stop Exploring the world</h2>

				<p>Life is a journey!... Enjoy every bit of that journey and you will be happy that you reached the destination you desired...!</p>
				<a href="satara.php">Explore</a>
			</div>

		</section>
		<section class="section2">
			<div class=".info">
				<h1 class="ti">Maharashtra</h1>
				<p></p>
				<div id="map"></div>
			</div>
			<script>
				var map;
				const Maharashtra_BOUNDS = {
					north: 22.59,
					south: 13.99,
					west: 69.97,
					east: 83.09,
				};

				function initMap() {
					map = new google.maps.Map(document.getElementById("map"), {
						center: {
							lat: 19.51650292323234,
							lng: 76.2226964198078
						},
						zoom: 6,
						mapId: 'f74dcc2ad06c520e',
						zoomControl: true,
						draggable: true,
						fullscreenControl: false,
						restriction: {
							latLngBounds: Maharashtra_BOUNDS,
							strictBounds: true,
						},
					});

					new google.maps.Marker({
						position: {
							lat: 19.82453683928397,
							lng: 73.02227326469286
						},
						map,
						title: "Palghar",
					});

					new google.maps.Marker({
						position: {
							lat: 19.4555,
							lng: 74.40566
						},
						map,
						title: "Ahmednagar",
					});

					new google.maps.Marker({
						position: {
							lat: 20.70035,
							lng: 77.10249
						},
						map,
						title: "Akola",
					});

					new google.maps.Marker({
						position: {
							lat: 21.11621,
							lng: 77.65361
						},
						map,
						title: "Amravati",
					});
					new google.maps.Marker({
						position: {
							lat: 19.89108,
							lng: 75.15453
						},
						map,
						title: "Aurangabad",
					});
					new google.maps.Marker({
						position: {
							lat: 18.92195,
							lng: 75.8069
						},
						map,
						title: "Beed",
					});
					new google.maps.Marker({
						position: {
							lat: 21.07364,
							lng: 79.82967
						},
						map,
						title: "Bhandara",
					});
					new google.maps.Marker({
						position: {
							lat: 20.45609,
							lng: 76.36372
						},
						map,
						title: "Buldhana",
					});
					new google.maps.Marker({
						position: {
							lat: 20.20952,
							lng: 79.56034
						},
						map,
						title: "Chandrapur",
					});
					new google.maps.Marker({
						position: {
							lat: 21.05765,
							lng: 74.68688
						},
						map,
						title: "Dhule",
					});
					new google.maps.Marker({
						position: {
							lat: 19.49687,
							lng: 80.27673
						},
						map,
						title: "Gadchiroli",
					});
					new google.maps.Marker({
						position: {
							lat: 21.28353,
							lng: 80.1875
						},
						map,
						title: "Gondia",
					});
					new google.maps.Marker({
						position: {
							lat: 19.57814,
							lng: 77.10249
						},
						map,
						title: "Hingoli",
					});
					new google.maps.Marker({
						position: {
							lat: 21.00765,
							lng: 75.5626
						},
						map,
						title: "Jalgaon",
					});
					new google.maps.Marker({
						position: {
							lat: 19.6807,
							lng: 75.99276
						},
						map,
						title: "Jalna",
					});
					new google.maps.Marker({
						position: {
							lat: 16.57644,
							lng: 74.12399
						},
						map,
						title: "Kolhapur",
					});
					new google.maps.Marker({
						position: {
							lat: 18.43275,
							lng: 76.73365
						},
						map,
						title: "Latur",
					});
					new google.maps.Marker({
						position: {
							lat: 19.01761,
							lng: 72.85612
						},
						map,
						title: "Mumbai",
					});
					new google.maps.Marker({
						position: {
							lat: 19.15382,
							lng: 72.87517
						},
						map,
						title: "Mumbai Suburban",
					});
					new google.maps.Marker({
						position: {
							lat: 21.31701,
							lng: 79.19999
						},
						map,
						title: "Nagpur",
					});
					new google.maps.Marker({
						position: {
							lat: 18.94378,
							lng: 77.37837
						},
						map,
						title: "Nanded",
					});
					new google.maps.Marker({
						position: {
							lat: 21.74685,
							lng: 74.12399
						},
						map,
						title: "Nandurbar",
					});
					new google.maps.Marker({
						position: {
							lat: 20.16235,
							lng: 74.03001
						},
						map,
						title: "Nashik",
					});
					new google.maps.Marker({
						position: {
							lat: 18.18533,
							lng: 76.04196
						},
						map,
						title: "Osmanabad",
					});
					new google.maps.Marker({
						position: {
							lat: 19.2644,
							lng: 76.64127
						},
						map,
						title: "Parbhani",
					});
					new google.maps.Marker({
						position: {
							lat: 18.68325,
							lng: 74.03001
						},
						map,
						title: "Pune",
					});
					new google.maps.Marker({
						position: {
							lat: 18.51575,
							lng: 73.18216
						},
						map,
						title: "Raigad",
					});
					new google.maps.Marker({
						position: {
							lat: 17.24775,
							lng: 73.37086
						},
						map,
						title: "Rantnagiri",
					});
					new google.maps.Marker({
						position: {
							lat: 17.17066,
							lng: 74.68688
						},
						map,
						title: "Sangli",
					});
					new google.maps.Marker({
						position: {
							lat: 17.578,
							lng: 74.03001
						},
						map,
						title: "Satara",
					});
					new google.maps.Marker({
						position: {
							lat: 16.34921,
							lng: 73.55941
						},
						map,
						title: "Sindhudurg",
					});
					new google.maps.Marker({
						position: {
							lat: 17.69567,
							lng: 75.52766
						},
						map,
						title: "Solapur",
					});
					new google.maps.Marker({
						position: {
							lat: 19.45403,
							lng: 73.37086
						},
						map,
						title: "Thane",
					});
					new google.maps.Marker({
						position: {
							lat: 20.80491,
							lng: 78.56608
						},
						map,
						title: "Wardha",
					});
					new google.maps.Marker({
						position: {
							lat: 20.13901,
							lng: 77.10249
						},
						map,
						title: "Washim",
					});
					new google.maps.Marker({
						position: {
							lat: 20.11695,
							lng: 78.11082
						},
						map,
						title: "Yavatmal",
					});
				}
			</script>
			<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuGFiN6EtGxM0lF-O-JUOOLHkpOFGhTF8&map_ids=f74dcc2ad06c520e&callback=initMap">
			</script>
		</section>
		<article class="article4">
			<div class="commentwrapper">
				<form action="" method="POST" class="form">
					<div class="row">
						<div class="input-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" placeholder="Enter your Name" required>
						</div>
						<div class="input-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" placeholder="Enter your email" required>
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

					$sql = "SELECT * FROM sataracomment";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {

					?>
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
</body>

</html>
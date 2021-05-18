<?php
include ('include/dbconfig.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us - Dispatch Sharer System</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Dispatch Sharer System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="register.php">Register</a>
				</li>
			</ul>
		</div>
	</nav>
	<main>
		<div class="separator"></div>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="title">About Us</h3>
						<p>The failure of communications, particularly related to interoperability, among safety agencies has resulted to the sudden increase in the number of emergencies reported by RTSA and other law enforcement agencies. Zambians count on first responders and public safety personnel to respond to routine and emergency incidents in a timely and effective manner. First responders and public safety personnel are responsible for the protection and security of over 18 Million people, however the safety agencies suffer from barriers of information sharing with other safety agencies and that has impeded the opportunity for interoperability of communications systems in order to share critical information in times of need. Challenges to achieving interoperability include incompatible radio equipment, lack of a common language, and the use of different frequency bands by different agencies. Ideally public safety systems in Zambia should be interoperable, secure, and resilient for voice and data communications using a centralised dispatch console system. The dispatch console system would direct all safety agencies to an emergency and in turn all agencies would communicate using two way radio systems. In order to achieve this, all public safety agencies should be allocated the same frequency band in which to communicate. As it stands, some public safety agencies operate in VHF, while others operate in UHF making it practically impossible to share information in critical times. <br>
							To promote interoperability, agencies should: optimize their internal communications systems; agree on basic requirements, set realistic goals, and collaborate to achieve a common goal – saving lives. With ZICTA being the regulator to the provision of Information and Communication Technologies, they should create a Public Safety Network (PSN) separate from commercial networks so that first responders can count on it during any emergency, and operate on shared radio frequencies. This would ensure collaboration and enhanced response time.  
						</p>
					</div>
					<div class="col-md-12">
						<h3 class="title">Background</h3>
						<p>
							Every day, Zambians count on first responders and public safety personnel to respond to routine and emergency incidents in a timely and effective manner. First responders and public safety personnel are responsible for the protection and security of over 18 Million Zambian people. In addition to day-to-day use, effective response to major disasters, emergencies and planned events require reliable, interoperable voice and data communication capabilities across jurisdictions and emergency responder communities (Ikki & Ahmed, 2010). <br>

							In some cases, these incidents and events even require support from international partners. No single agency at any level of the Zambian government has the capacity to successfully overcome incidents single handily. It is for this reason that coordination with other agencies is required to respond to these incidents. <br>

							Push to talk (PTT) has long been the foundation of mission-critical voice communications in public safety, dating right back to the earliest deployments of two-way police radio in the 1930s. While public land mobile radio (LMR) systems have evolved considerably over the decades, the core technology remains the same (Kennedy, 2020).<br>
							The Push to Talk service is very attractive to first responders because it is relatively inexpensive and works very well under favorable communications conditions. However, there are a number of challenges to its widespread use for public safety communications. The first responders’ requirements differ significantly from that of most users because of the safety-of-life implications of their services. Among these unique requirements are: coverage, ability to establish communications in real-time between different public safety organizations involved in managing incidents.<br>

							Therefore, the ever increasing demand of mission critical wireless voice, data, and video communications has generated more requests from government sectors, public safety, transport, logistics, construction, mining, Emergency Services,  industries, etc. which has driven the need to find more efficient ways to use the limited resources. The services of the public safety organizations are important to the Zambian society by maintaining a stable and secure environment. These services are expected to provide protection to people from large number of natural and man-made threads. This includes acts of terrorism, technological, radiological, environmental accidents etc., Information and Communication Technologies (ICT) have an important role in the public safety. The capability of exchanging information such as voice or data is essential to improve the coordination between public safety and police officers during an emergency, theft or public disorder. Additionally wireless communication is vital in field operations to support the mobility of first responders (Ann & Kim, 2010). <br>

							Push to Talk is a National two-way radio service that for many years, businesses have preferred to use because of its stability as compared to traditional Two-way radio systems. PTT allows several users to speak with each other while using a single, half-duplex, communication channel, such that only one user speaks at a time while all other users listen. It is a well-known service in the law enforcement and public safety communities, where coordination and spectral efficiency are key for efficient communication. <br>

							Some cell phone companies offer a similar service in the commercial world. However, core differences in motivation drive these two sectors. Cellular phone systems are designed for the busiest hour, as outages impact revenue, while public safety systems are designed for worst case scenarios.<br>

							In fields such as transportation, energy, government, retail, hospitality and many other industries, professional PTT radio systems offer capabilities that no other mobile technology can provide. PTT radio system can offer professionals instant, private and cost-effective communication in any environment – anywhere and anytime. There is no need to deploy supporting infrastructure in a field situation, or to rely on subscriber-based public networks that may be under-supported or completely unavailable. 

						</p>
					</div>
				</div>
			</div>
		</section>
	</main>
	<div class="footer bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Designer</h3>
					<ul>
						<li>Student Name: Chibuta William Kayashi</li>
						<li>Student No. 1504240503</li>
						<li>Course: Final Year Project</li>
						<li>Prorgam: BSc of Science in Mobile Communications</li>
					</ul>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<h3>Links</h3>
					<ul>
						<li><a href="http://icuzambia.net/">ICU Zambia</a></li>
						<li><a href="http://zrdc.org/">ZRDC</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

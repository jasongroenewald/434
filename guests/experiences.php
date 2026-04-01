<?php session_start(); 

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://four3four.co.za/assets/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css" integrity="sha256-D9AvR0EzkNZoWZVSvI3ch+uf/Z5izrIpcbsykVphwPU=" crossorigin="anonymous" />
<title>four3four - A beautiful stay in Cape Town, South Africa</title>
<meta charset="UTF-8">
<meta name="description" content="Book and stay in this beautiful bright studio in Cape Town, South Africa">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="https://four3four.co.za/stayhere.jpg">
<meta property="og:type" content="website">
<meta property="og:url" content="https://four3four.co.za/">
<meta property="og:image:width" content="1300">
<meta name="theme-color" content="#405749">
<meta property="og:image:height" content="740">
<meta property="og:description" content="Book and stay in this beautiful bright studio in Cape Town, South Africa">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- ****** faviconit.com favicons ****** -->
<link rel="shortcut icon" href="https://four3four.co.za/favicons/favicon.ico">
<link rel="icon" sizes="16x16 32x32 64x64" href="https://four3four.co.za/favicons/favicon.ico">
<link rel="icon" type="image/png" sizes="196x196" href="https://four3four.co.za/favicons/favicon-192.png">
<link rel="icon" type="image/png" sizes="160x160" href="https://four3four.co.za/favicons/favicon-160.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://four3four.co.za/favicons/favicon-96.png">
<link rel="icon" type="image/png" sizes="64x64" href="https://four3four.co.za/favicons/favicon-64.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://four3four.co.za/favicons/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://four3four.co.za/favicons/favicon-16.png">
<link rel="apple-touch-icon" href="https://four3four.co.za/favicons/favicon-57.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://four3four.co.za/favicons/favicon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://four3four.co.za/favicons/favicon-72.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://four3four.co.za/favicons/favicon-144.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://four3four.co.za/favicons/favicon-60.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://four3four.co.za/favicons/favicon-120.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://four3four.co.za/favicons/favicon-76.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://four3four.co.za/favicons/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://four3four.co.za/favicons/favicon-180.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="https://four3four.co.za/favicons/favicon-144.png">
<meta name="msapplication-config" content="https://four3four.co.za/favicons/browserconfig.xml">
<!-- ****** faviconit.com favicons ****** -->
</head>

<body>
<nav class="offcanvas">
	<ul>
		<li><a href="index.html">Guest information</a></li>
		<li class="active"><a href="experiences.html">Explore Cape Town</a></li>
	</ul>
</nav>
<header class="half"> 
	<nav>
		<div class="l">
			<img src="https://four3four.co.za/assets/full-logo.svg" alt="four3four, Cape Town, South Africa" />
		</div>
		<div class="r">
			<img id="menu" src="https://four3four.co.za/assets/menu.svg" alt="Navigation" />
		</div>
	</nav>
</header>
<main>
	<section id="details" class="explore">
		<div class="container section">
			<div class="row">
				<div class="col-12">
 					<h1 class="h3">In and around Cape Town</h1>
 				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-3">
				</div>
				<div class="col-12 col-md-9">
					<div class="sec">
						<h1>Table Mountain</h1>
						<ul class="meta">
							<li>14 min away (6,1 km)</li>
						</ul>
						<p>Around 600 million years old, and a canvas painted with the rich diversity of the Cape floral kingdom, Table Mountain is truly iconic. You can admire the showstopper of Table Mountain National Park and one of the 'New 7 Wonders of Nature' from multiple angles, but you really can’t say you’ve visited Cape Town until you’ve stood on top of it.</p>
						<p></p>

						<h2>Getting there</h2>
						<h3>City Sightseeing</h3>
						<p>A quick and easy way to reach the Cableway is on the <a class="txtlink" target="_blank" href="https://www.citysightseeing.co.za/destinations/cape-town">City Sightseeing</a> bus. This “hop-on, hop-off” service runs every 20 minutes and stops at other major tourist attractions in Cape Town.</p>
						<p>It’s a 90-minute round trip that starts at the Two Oceans Aquarium, passing the Clock Tower at the V&A Waterfront and the Cape Town International Convention Centre, before heading up Adderley Street, stopping at City Sightseeing’s Long Street tour office. From there the bus continues directly to the Cableway. You can also get your cable car tickets directly from their offices or bus drivers.</p>
						<h3>MyCiTi</h3>
						<p>Take the free MyCiTi shuttle service from the Lower Tafelberg Road stop, just off Kloof Nek Road, to the Upper Tafelberg Road stop at the Lower Cable station! Parking can sometimes be hard to find on busy days, and you can end up more than 1km away. The Cableway can be reached by public transport: the Cape Town Integrated Rapid Transit system, <a class="txtlink" target="_blank" href="https://www.myciti.org.za/en/home/">MyCiTi</a>, stops right outside the Lower Cable Station. The MyCiTi bus route that runs from the V&A Waterfront to Camps Bay stops at the top of Kloof Nek Road (route number 106 and 107, Waterfront Silo / Civic Centre / Camps Bay). Hop off there and take the free MyCiTi shuttle service (route 110) that runs from Kloof Nek Road, up Tafelberg Road and right to the Lower Cableway Station. You can also stop here if coming from Camps Bay. The free service runs from when we open until 7pm every day.</p>

						<ul class="links">
							<li><a href="https://www.tablemountain.net/" target="_blank">Visit the official website</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container section">
			<div class="row">
				<div class="col-12">
					<h1 class="h3">A little out of the city</h1>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-12 col-md-3">
					
				</div>
				<div class="col-12 col-md-9">
					<div class="sec">
						<h1>Kirstenbosch National Botanical Garden</h1>
						<ul class="meta">
							<li>15 min away (12,3 km)</li>
						</ul>
						<p>Location and unique flora combine to make these 5.28-sq-km botanical gardens among the most beautiful in the world. Gate 1, the main entrance at the Newlands end of the gardens, is where you’ll find the information centre, an excellent souvenir shop and the conservatory.</p>

						<p>Added for the garden's centenary in 2013, the popular Tree Canopy Walkway (informally known as the 'Boomslang', meaning tree snake) is a curvaceous steel and timber bridge that rises through the trees and provides amazing views.</p>

						<p>The gardens run free guided walks, or you can hire the MyGuide electronic gizmo (R40) to receive recorded information about the various plants you’ll pass on the signposted circular walks.</p>

						<p>More than 7000 of Southern Africa’s 22,000 plant species are grown here, including the Cape Floral Kingdom's famous fynbos (literally, 'fine bush'; primarily proteas, heaths and ericas). You’ll find a fragrance garden that has been elevated so you can more easily sample the scents of the plants; a Braille trail; a kopje (hill) planted with pelargoniums; a sculpture garden; a section devoted to 'useful' medicinal plants; two hiking trails up Table Mountain (Skeleton Gorge and Nursery Ravine); and the significant remains of Van Riebeeck's Hedge, the wild almond hedge planted by Jan van Riebeeck in 1660 to form the boundary of the Dutch outpost.</p>

						<p>The outdoor Summer Sunset Concerts, held here on Sundays between November and April, are a Cape Town institution. The gardens are a stop on the City Sightseeing bus. The quiet Gate 3 (aka Rycroft Gate) is the first you’ll come to if you approach the gardens up Rhodes Dr from the south. There are three cafes, including the excellent Kirstenbosch Tea Room.</p>

						<h2>Getting there</h2>
						<h3>Car</h3>
						<p>Kirstenbosch lies 13 km from Cape Town’s city centre, well signposted on all major roads. From the city, take De Waal Drive (M3) in the direction of Muizenberg, at the Rhodes Drive (M63) traffic light intersection turn right (west/towards the mountain) and follow the signs to Kirstenbosch. Free parking is available at Gates 1, 2 and 3.</p>
						<h3>Bus</h3>
						<p>The City Sightseeing Hop On Hop Off Bus, the mini peninsula tour, stops at Kirstenbosch Garden 15 times a day during summer (mid Sept to April) and 12 times a day during winter (May to mid September), 7 days a week.</p>

						<p>The bus stop for the City Sightseeing bus is at the Visitors’ Centre (Gate 1), in the parking area directly below the Vida-e Café, to the left of the entrance to the centre as you walk in. The first bus arrives at 09:50 and there is one every 20 minutes in summer, and one every 35 minutes in winter, until the last at 16:20.</p>

						<ul class="links">
							<li><a href="https://www.sanbi.org/gardens/kirstenboch/visitor-information/information/" target="_blank">Visitor information</a></li>
							<li><a href="https://www.sanbi.org/gardens/kirstenbosch/" target="_blank">Visit the official website</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>A434 St Martini Gardens, 74 Queen Victoria Street <br> Cape Town City Centre, Cape Town, South Africa</p>
				</div>
			</div>
		</div>
	</footer>
</main>
<script type="text/javascript">
	$( document ).ready(function() {
		$("#menu").click(function(){
		  $(".offcanvas").toggleClass("open");
		});
	});
</script>
</body>

</html>
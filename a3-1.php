<?php 

$myDay = date('l');
$myPic = '';
$featureCoffee = '';
$contentCoffee = '';
$contentCoffeeMore = '';
$altCoffee = '';


//TESTING - DELETE
//$myDay = "Monday";

//here we will be changing the picture according to the day
switch($myDay)
{

    case 'Monday':
        $myPic = "pumpkin-spice-latte.jpg";
        $altCoffee = "This the best pumpkin spice latte in the city!";
        $featureCoffee = "Pumpkin Spice Latte";
        $contentCoffee = "our signature espresso and milk are highlighted by flavor notes of pumpkin, cinnamon, nutmeg and clove to create this incredible beverage that's a fall favorite. Enjoy it topped with whipped cream and real pumpkin pie spices.";
        $contentCoffeeMore = "has become synonymous with the beginning of fall and all of the traditions that come with it, for example the celebration of Thanksgiving. For others, the drink's limited availability is what drives their purchase. As noted in an article published in Forbes magazine, products that are available only for a limited time have a kind of built-in marketing that can grow in impact over time.";
        break;
    
    case 'Tuesday':
        $myPic = "iced-coffee.jpg";
        $altCoffee = "Best time to have some iced coffee with fresh coffee!";
        $featureCoffee = "Iced Coffee";
        $contentCoffee = "in case of hot brewing this can be normally brewed coffee (drip, press pot, etc.), or espresso. In case of hot brewing, sweeteners and flavorings are often mixed into the hot coffee before cooling, due to higher solubility in hot water.";
        $contentCoffeeMore = "pre-packaged is available as a grocery item in several countries. Regardless of brewing method, iced coffee is generally brewed at a higher strength than normal coffee, due to the dilution caused by the ice.";
        break;
    
    case 'Wednesday':
        $myPic = "antoccino.jpg";
        $altCoffee = "Exquisite Antoccino Coffee handcraft";
        $featureCoffee = "Antoccino";
        $contentCoffee = "is a specific style of espresso coffee. It was made popular due to the desire to have the proportion,taste and texture of a double-shot Caffé Latte without the high caffeine level.";
        $contentCoffeeMore = "is prepared by extracting one shot of espresso into a small esspresso cup (around 60mL) to the half way mark. Steamed latte-style milk is prepared and poured to fill the remainder of the cup.";
        break;
    
    case 'Thursday':
        $myPic = "cafe-bombon.jpg";
        $altCoffee = "Cafe Bombon is a delightful treat!";
        $featureCoffee = "Cafe Bombon";
        $contentCoffee = "which was made popular in Valencia, Spain, and spread gradually to the rest of the country. It might have been re-created and modified to suit European tastebuds as in many parts of Asia such as Malaysia, Thailand and Singapore the same recipe for coffee which is called Kopi Susu Panas or Kafe Ron has already been around for decades and is very popular in mamak stalls or kopitiams in Malaysia.";
        $contentCoffeeMore = "uses espresso served with sweetened condensed milk in a 1:1 ratio whereas the Asian version uses ground coffee and sweetened condensed milk at the same ratio. For café bombón, the condensed milk is added to the espresso.";
        break;
    
    case 'Friday':
        $myPic = "caffe-americano.jpg";
        $altCoffee = "The classic worldwide Caffe Americano";
        $featureCoffee = "Caffe Americano";
        $contentCoffee = "is a style of coffee prepared by brewing espresso with added hot water, giving it a similar strength to, but different flavor from, drip coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added. The name is also spelled with varying capitalization and use of diacritics: e.g., café americano.";
        $contentCoffeeMore = "consists of a single or double-shot of espresso brewed with added water. There seems to be no universal consensus on the way the water is added, but typically in the UK (and in Italy) between 1 and 16 fluid ounces (30–470ml) of hot water is added to the double espresso.";
        break;
    
    case 'Saturday':
        $myPic = "eggnog-latte.jpg";
        $altCoffee = "Try the delicious seasonal Eggnog latte";
        $featureCoffee = "Eggnog latte";
        $contentCoffee = "simple pleasure that delivers a bit of holiday cheer in every cup. Rich espresso mingles with perfectly spiced eggnog and milk, finished with a sprinkle of nutmeg.";
        $contentCoffeeMore = "froth half and half, caramelization, eu extraction, caramelization barista, brewed café au lait carajillo espresso mazagran. Sugar, caramelization sweet mug wings body ut turkish.";
        break;
    
    case 'Sunday':
        $myPic = "cappuccino.jpg";
        $altCoffee = "Capuccino is a familiar but exotic word";
        $featureCoffee = "Cappuccino";
        $contentCoffee = "an Italian coffee drink which is traditionally prepared with espresso, hot milk and steamed milk foam.";
        $contentCoffeeMore = "is a coffee drink which today is composed of espresso and hot milk, with the surface topped with foamed milk. Cappuccinos are most often prepared with an espresso machine. The espresso is poured into the bottom of the cup, followed by a similar amount of hot milk, which is prepared by heating and texturing the milk using the espresso machine steam wand. The top third of the drink consists of milk foam; this foam can be decorated with artistic drawings made with the same milk, called latte art.";
        break;
}

//here we will be changing the background and feature text colors depending on the day
if ($myDay == "Monday"){
    $backGroundColor = "#D84830";
    $featureColor = "#D84830";
    //echo "it is this";
    
}else if ($myDay == "Tuesday"){
    $backGroundColor = "#E53B51";
    $featureColor = "#E53B51";
    //echo "it is Tuesday";
    
}else if ($myDay == "Wednesday"){
    $backGroundColor = "#3CB5B5";
    $featureColor = "#3CB5B5";
    //echo "it is wednesday";
    
}else if ($myDay == "Thursday"){
    $backGroundColor = "#FCD920";
    $featureColor = "#FCD920";
    //echo "it is wednesday";
    
}else if ($myDay == "Friday"){
    $backGroundColor = "#EE5D88";
    $featureColor = "#EE5D88";
    //echo "it is wednesday";
    
}else if ($myDay == "Saturday"){
    $backGroundColor = "#C9A992";
    $featureColor = "#C9A992";
    //echo "it is wednesday";
    
}else if ($myDay == "Sunday"){
    $backGroundColor = "#96C8EB";
    $featureColor = "#96C8EB";
    //echo "it is wednesday";
}





//we get the hour from the date function
$hour = date('G');

// and then we cast hour to an integer
//$hour = (int)$hour;
//$hour = 12;

if($hour >= 1 && $hour < 12){//6am - 12pm
    $hour = "What are you in the mood of this Morning?";
    //$backgroundColor = "orange";
    
}else if($hour >= 12 && $hour < 17){//18pm - 23:00 (11pm)
    $hour = "Time for some coffee this afternoon?";
    
}else if($hour >= 17 && $hour < 20){//12pm - 18:00 (6pm)
    $hour = "Good Evening!";

}else{//this happens if false, evening?
    $hour = "Nothing like having some coffee at night!";
    //$backgroundColor = "blue";
}


//die;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>LARGEBUCK$ Coffee</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
    <style type="text/css">
	
        html {background-color:<?=$backGroundColor?>;/* pumpkin - overwrites default */}
        
        .feature {color:<?=$featureColor?>; /* daily feature color - pumpkin! */}
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:100px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header>
	    <img src="images/largebucks-logo.jpg" alt="You drink our coffee, we make large bucks!" class="flexible" id="logo" />
		<h1 class="masthead">LARGEBUCK$ COFFEE</h1>
		<nav>
			<ul>
				<li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
                <li><a href="#">Sample Link</a></li>
			</ul>
		</nav>
	</header>
    <main>
		 <header><h3 class="slogan">You drink our coffee, we make large bucks!</h3></header>
        <p>
        
    		 <img src="images/<?=$myPic?>" alt="<?=$altCoffee?>" id="coffee" />
            <strong class="feature"><h2><?=$hour?></h2></strong>
            <strong class="feature"><?=$myDay?>'s Coffee Special:</strong> <?=$myDay?>'s daily coffee special is <strong class="feature"><?=$featureCoffee?></strong>, <?=$contentCoffee?></p>
        
        <p><span class="feature"><?=$featureCoffee?> </span> <?=$contentCoffeeMore?></p>
        <p><span class="feature">Enjoy <?=$featureCoffee?> with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.</p>
		 <p>
		 <b>At LargeBuck$ we aspire to: </b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn, blog Intelligentsia gentrify jean shorts sartorial bicycle rights gastropub. Aesthetic wayfarers Pitchfork, tattooed Carles quinoa meh leggings distillery pork belly banjo. Umami cred lumbersexual skateboard, pork belly Tumblr vegan letterpress. Fixie bicycle rights butcher chillwave, gluten-free health goth Echo Park locavore whatever.

		 </p>
		<p>
		Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. Biodiesel VHS Godard High Life, tousled Banksy craft beer. Mlkshk direct trade locavore, mumblecore keytar artisan hashtag fap. Cred cronut Brooklyn, locavore art party small batch PBR semiotics ennui kitsch taxidermy mlkshk stumptown.
		</p>
		<p>
		Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin. Etsy Wes Anderson 8-bit retro, polaroid synth paleo banh mi before they sold out Vice. Bushwick fap Intelligentsia, whatever Etsy High Life Kickstarter migas retro Banksy YOLO Carles yr raw denim. Gluten-free fixie taxidermy pop-up, actually Kickstarter flannel put a bird on it master cleanse.
		</p>
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; 2014-2015, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		$('.seasons a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var season = $(this).attr("href");//contents of href attribute of this element
			var stylesheet = $('#mainStylesheet');
			season = season.toLowerCase();
			switch(season)
			{
				case 'spring':
				$('#logo').attr("src","images/spring.gif");
				$('#wear').attr("src","images/spring-wear.jpg");
				$('main header h3').html("Get a jump on Spring wear!");
				break;
				
				case 'summer':
				$('#logo').attr("src","images/summer.gif");
				$('#wear').attr("src","images/summer-wear.jpg");
				$('main header h3').html("Make Summer a hummer!");
				break;
				
				case 'fall':
				$('#logo').attr("src","images/fall.gif");
				$('#wear').attr("src","images/fall-wear.jpg");
				$('main header h3').html("Fall into Fall!");
				break;
				
				case 'winter':
				$('#logo').attr("src","images/winter.gif");
				$('#wear').attr("src","images/winter-wear.jpg");
				$('main header h3').html("Keep warm this Winter!");
				break;
				
				default:
				$('#logo').attr("src","images/four-seasons.gif");
				$('#wear').attr("src","images/300x400.png");
				$('main header h3').html("Outfitter for all seasons!");
				
			}
			
			var season = "css/" + season + ".css";
			$(stylesheet).attr("href",season);
			//alert(season);
		});
	});
    </script>
	
</body>
</html>
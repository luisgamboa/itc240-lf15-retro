<?php include 'includes/config.php';?>

<?php 

if (isset($_GET['day']))
{//show the selected day
    $myDay = $_GET['day'];
    
}else{//show today
    $myDay = date('l');
    
}

//die;

//$myDay = date('l');
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



<?php include 'includes/header.php';?>
<h1 id="h1-test"><?=$pageID?></h1>

<img src="images/<?=$myPic?>" alt="<?=$altCoffee?>" id="coffee" />

<p id="p-test">
<strong class="feature"><?=$myDay?>'s Coffee Special:</strong> <?=$myDay?>'s daily coffee special is <strong class="feature"><?=$featureCoffee?></strong>, <?=$contentCoffee?></p>


<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>





<h2 id="h2-test">I am an H2</h2>

<p id="p-test">Clever contact goes here</p>

<?php include 'includes/footer.php';?>
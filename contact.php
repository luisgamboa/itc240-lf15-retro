<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1 id="h1-test"><?=$pageID?></h1>
<p id="p-test">
						This website template has been designed by <a href="http://www.freewebsitetemplates.com">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums"> Forums</a>.
</p>


<h4 id="h4-test">Comments and Suggestions? Just fill in the form below.</h4>

<?php
    if(isset($_POST['submit']))
    {
        /*
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        */
        
        $to = 'luisgamboasierra@gmail.com';
        $message = process_post();
        $replyTo = $_POST['Email'];
        //$subject = 'Test from contact form';
        $subject = $_POST['Subject'];
        
        safeEmail($to, $subject, $message, $replyTo);
        
        
        //confirmation that the information was sent
        if(mail($replyTo, $subject, $message)) {
            echo "Thank you for contacting us. We will get back to you shortly.";
        } 
        else echo "There was an error. Please try again.";
        
        //checkboxes
        $selectedTypes  = 'None';
        if(isset($_POST['types']) && is_array($_POST['types']) && count($_POST['types']) > 0){
            $selectedTypes = implode(', ', $_POST['types']);
        }

        $body .= 'Selected Types: ' . $selectedTypes;
        
        
    }else{//show form
        echo '
        <form id="input-style" method="post" action="' . THIS_PAGE . '">
        Name: <input id="input-style" type="text" name="Name" requiered="requiered" /><br />
        Email: <input id="input-style" type="email" name="Email" requiered="requiered" /><br />
        Subject: <input id="input-style" type="subject" name="Subject" requiered="requiered" /><br />
        Comments: <textarea id="input-style" name="Comments"></textarea><br />
      
        <p id="h2-test">What brings you in ?<p/>
        <input type="checkbox" name="types[]" value="Breakfast">
        <label for="type1">Breakfast</label>
        
        <input type="checkbox" name="types[]" value="Lunch">
        <label for="type2">Lunch</label>
        
        <input type="checkbox" name="types[]" value="Dinner">
        <label for="type3">Dinner</label> 
        <br />
        <br />
   
        <input type="submit" value="" name="submit" />
        
        
        
        </form>
        ';
        
    }
    
    ?>


<?php include 'includes/footer.php';?>
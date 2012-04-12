<?php

    require "invite.php";
    
    $invite = new Invite();
    $invite 
	    ->setBody("This is a test body") 
	    ->setSubject("Test Invite")
	    ->setStart(new DateTime())
	    ->setEnd(new DateTime)
	    ->setLocation("Queens, New York")
	    ->addAttendee("ahmadfamin@gmail.com", "ahmad amin");
    
    $invite ->download();

?>
<?php

    require "invite.php";
    
    $invite = new Invite();
    $invite 
	    ->setDescription('This is a test invite to see how this thing actually works.\nAuthor:Ahmad Amin\nDate:April 13th, 2012') 
	    ->setSubject("Test Invite")
	    ->setStart(new DateTime('2013-03-16 12:00AM EST'))
	    ->setEnd(new DateTime('2013-03-16 11:59PM EST'))
	    ->setLocation("Queens, New York")
	    ->setFrom("afa@entermarketing.com", "John Doe")
	    ->addAttendee("afsa@entermarketing.com", "John Doe");
    
    $invite ->download();


?>
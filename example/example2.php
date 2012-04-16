<?php

/**
 * 
 * Example2: This example shows you how to generate an invite, save it
 * to file and download it at a later time.
 *  
 */

require "../invite.php";

$invite = new Invite();
$invite
	->setSubject("Test Demo Invite")
	->setDescription("The is a test invite for you to see how this thing actually works")
	->setStart(new DateTime('2013-03-16 12:00AM EST'))
	->setEnd(new DateTime('2013-03-16 11:59PM EST'))
	->setLocation("Queens, New York")
	->setOrganizer("john@doe.com", "John Doe")
	->addAttendee("ahmad@ahmadamin.com", "Ahmad Amin")
	->generate() // generate the invite
	->save(); // save it to a file

// as you may notice this is a static method
// it is indipendent of the object.
$download_link = Invite::getSavedPath();

?>
<a href="<?=$download_link;?>" >Dowload Invite</a>

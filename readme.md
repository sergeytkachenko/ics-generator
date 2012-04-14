
## ICS File Generator

This class generates an .ics file that users can download and add to their Calender. This file is compatible with any software that supports
standard ICS files which includes Outlook, Google Calender, iCal and many more.

## Usage

The library was designed to be as simple as possible and get you up and running in the shortest amount of time.

### Step 1: Getting the library

I would recommend you download the library directly from the git repository (https://github.com/ahmadamin/ics-generator) because it will always 
be up-to-date with the latest release. All you need is the **invite.php** file which includes the class **Invite** that does all the magic.

### Step 2: Usage
As mentioned above this class was designed to be as simple as possible to use. All you are required is to be a little familiar with Object-Oriented
PHP. If you are not familiar with OO PHP that is also not a problem because you can just copy and paste this example below and modify the invite details
to suite your needs.

I would highly recommend you **do not alter or modify the invite.php file or class**. You should do all programming in a separate file/page.

    require 'invite.php';

    $invite = new Invite($unique_id); // You should (not required) provide a UNIQUE ID
    $invite 
	    ->setSubject("Test Demo Invite")
	    ->setDescription("The is a test invite for you to see how this thing actually works") 
	    ->setStart(new DateTime('2013-03-16 12:00AM EST'))
	    ->setEnd(new DateTime('2013-03-16 11:59PM EST'))
	    ->setLocation("Queens, New York")
	    ->setOrganizer("john@doe.com", "John Doe")
	    ->addAttendee("ahmad@ahmadamin.com", "Ahmad Amin");

    $invite -> download();

The generated output file is **invite.ics**. You can open that file with Outlook or iCal.

As you can see it only takes a couple lines of code to use the library. Although the library is composed of many methods to do a wide variety of things most aren't required.
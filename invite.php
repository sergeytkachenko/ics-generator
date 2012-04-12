<?php

/**
 * 
 * Auther: Ahmad Amin
 * Email : hello@ahmadamin.com
 * Website: http://ahmadmain.com
 * 
 * Copyright (c) 2012 Ahmad Amin. All Rights Reserved.
 * 
 * You are free to use, modify and redistribute this code.
 * 
 */
class Invite
{

    /**
     * The event start date
     * @var DateTime
     */
    private $_start;

    /**
     * The event end date
     * @var DateTime
     */
    private $_end;

    /**
     * The name of the user the invite is coming from
     * @var string
     */
    private $_fromName;

    /**
     * Sender's email
     * @var string
     */
    private $_fromEmail;

    /**
     * The invite body content
     * @var string
     */
    private $_body;

    /**
     * 
     * The name of the event
     * @var string
     */
    private $_name;

    /**
     * The event location
     * @var string
     */
    private $_location;

    public function __construct()
    {
	return $this;
    }

    /**
     * 
     * Set the event stat and end time.
     * 
     * @param DateTime $start
     * @param DateTime $end
     * @return \Invite 
     */
    public function setDate(DateTime $start, DateTime $end)
    {
	$this->setStartDate($start);
	$this->setEndDate($end);

	return $this;
    }

    /**
     * Set the start datetime
     * @param DateTime $start
     * @return \Invite 
     */
    public function setStart(DateTime $start)
    {
	$this->_start = $start;
	return $this;
    }

    /**
     * Set the end datetime
     * @param DateTime $end
     * @return \Invite
     */
    public function setEnd(DateTime $end)
    {
	$this->_end = $end;
	return $this;
    }

    /**
     * 
     * Set the of the even sender
     * 
     * @param string $email
     * @param string $name
     * @return \Invite 
     */
    public function setFrom($email, $name = null)
    {
	if (null === $name) {
	    $name = $email;
	}

	$this->_fromEmail = $email;
	$this->_fromName = $name;

	return $this;
    }

    /**
     * Set the name of the event
     * @param string $name
     * @return \Invite 
     */
    public function setName($name)
    {
	$this->_name = $name;
	return $this;
    }

    /**
     * An alies of setName
     * @param string $subject
     * @return \Invite 
     */
    public function setSubject($subject)
    {
	$this->setName($subject);
	return $this;
    }

    /**
     * 
     * An alies of setSubject()
     * 
     * @param string $summary
     * @return \Invite 
     */
    public function setSummary($summary)
    {
	$this->setSubject($summary);
	return $this;
    }

    /**
     * 
     * Set the invite body content
     * 
     * @param string $body
     * @return \Invite 
     */
    public function setBody($body)
    {
	$this->_body = $body;
	return $this;
    }

    /**
     * 
     * An alies of setBody().
     * @param string $desc
     * @return \Invite 
     */
    public function setDescription($desc)
    {
	$this->setBody($desc);
	return $this;
    }

    /**
     * 
     * Set the location where the event will take place
     * @param string $location
     * @return \Invite 
     */
    public function setLocation($location)
    {
	$this->_location = $location;
	return $this;
    }

    /**
     * An alies of setLocation()
     * @param string $place
     * @return string
     */
    public function setPlace($place)
    {
	return $this->setLocation($place);
    }

    /**
     * 
     * Get the location where the event will be held
     * @return type 
     */
    public function getLocation()
    {
	return $this->_location;
    }

    /**
     * An alies of getLocation()
     * @return string
     */
    public function getPlace()
    {
	return $this->getLocation();
    }

    /**
     * 
     * Get the event name
     * @return string
     */
    public function getName()
    {
	return $this->_name;
    }

    /**
     * An alies of getName();
     * @return string
     */
    public function getSummary()
    {
	return $this->getName();
    }

    /**
     * Get the current body content
     * @return string
     */
    public function getBody()
    {
	return $this->_body;
    }

    /**
     * An alies of getBody()
     * @return string
     */
    public function getDescription()
    {
	return $this->getBody();
    }

    /**
     * Just to do it.
     * @return \Invite 
     */
    public function __toString()
    {
	return $this;
    }

    /**
     * Get the name of the invite sender
     * @return string
     */
    public function getFromName()
    {
	return $this->_fromName;
    }

    /**
     * Get the email where the email will be sent from
     * @return string
     */
    public function getFromEmail()
    {
	return $this->_fromEmail;
    }

    /**
     * Get the start time set for the even
     * @return string
     */
    public function getStart()
    {
	return $this->_start;
    }

    /**
     * Get the end time set for the event
     * @return string
     */
    public function getEnd()
    {
	return $this->_start;
    }

}

?>
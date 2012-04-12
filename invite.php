<?php

class Invite
{

    private $_start;
    private $_end;
    private $_fromName;
    private $_fromEmail;
    private $_body;

    public function __construct()
    {
	return $this;
    }

    public function setDate($start, $end)
    {
	$this->setStartDate($start);
	$this->setEndDate($end);

	return $this;
    }

    public function setStart($start)
    {
	$this->_start = $start;

	return $this;
    }

    public function setEnd($end)
    {
	return $this->_end = $end;
    }

    public function setFrom($email, $name = null)
    {
	if (null === $name) {
	    $name = $email;
	}

	$this->_fromEmail = $email;
	$this->_fromName = $name;

	return $this;
    }

    public function setBody($body)
    {
	$this->_body = $body;

	return $this;
    }

    public function getBody()
    {
	return $this->_body;
    }

    public function __toString()
    {
	return $this;
    }

    public function getFromName()
    {
	return $this->_fromName;
    }

    public function getFromEmail()
    {
	return $this->_fromEmail;
    }

    public function getStart()
    {
	return $this->_start;
    }

    public function getEnd()
    {
	return $this->_start;
    }

}

?>
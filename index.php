<?php

class Dady
{
	public function getSon()
	{
		return "BOY -.-";
	}
	
	public function getDaughter()
	{
		return "Girl o.O";
	}
}

class Child extends Dady
{
	
}

$dady = new Dady();
echo "Its a ".$dady->getDaughter();
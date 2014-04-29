<?php
/**
 * Holding a instance of CStilun to enable use of $this in subclasses and provide some helpers.
 *
 * @package StilunCore
 */
class CObject 
{

	/**
	 * Members
	 */
	protected $ly;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $ly reference.
	 */
	protected function __construct($ly=null) 
	{
		if(!$ly) 
		{
			$ly = CStilun::Instance();
	    	}
	    	$this->ly       = &$ly;
	    	$this->config   = &$ly->config;
	    	$this->request  = &$ly->request;
	    	$this->data     = &$ly->data;
	    	$this->db       = &$ly->db;
	    	$this->views    = &$ly->views;
	    	$this->session  = &$ly->session;
	    	$this->user     = &$ly->user;
	}


	/**
	 * Wrapper for same method in CStilun. See there for documentation.
	 */
	 protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) 
	 {
		$this->ly->RedirectTo($urlOrController, $method, $arguments);
	 }


	/**
	 * Wrapper for same method in CStilun. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) 
	{
		$this->ly->RedirectToController($method, $arguments);
	}


	/**
	 * Wrapper for same method in CStilun. See there for documentation.
	 */
	 protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) 
	 {
	 	 $this->ly->RedirectToControllerMethod($controller, $method, $arguments);
	 }


	/**
	 * Wrapper for same method in CStilun. See there for documentation.
	 */
	 protected function AddMessage($type, $message, $alternative=null) 
	 {
	 	 return $this->ly->AddMessage($type, $message, $alternative);
	 }


	/**
	 * Wrapper for same method in CStilun. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) 
	{
		return $this->ly->CreateUrl($urlOrController, $method, $arguments);
	}


}


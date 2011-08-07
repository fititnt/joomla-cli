<?php
/**
 * @package     HelloWord
 * @author      Emerson Rocha Luiz - @fititnt ( http://fititnt.org )
 * @copyright   Copyright (C) Joomla! Coders Brazil @JCoderBR. All rights reserved.
 * @license     GNU General Public License version 3
 * Thanks you Ryan Ozimek for post this code on GoogleDocs
 */
define( '_JEXEC', 1 ); // You MUST define it. Or Joomla Framework will not load
include_once dirname(__FILE__) . "../../../../joomla/joomla-platform/libraries/import.php"; //path to Joomla
jimport( 'joomla.application.cli' ); //Load JCli

class HelloWorld extends JCli
{
	public function execute()
	{
		$this->out('What is your name?');
		$name = $this->in();	
		$this->out();
		$this->out(' Hi '. $name . ', ');
		$this->out('Welcome to the Joomla Platform!');
		$this->out();
	}
	
	/**
	 * We don’t really need configuration for this application.
	 * 
	 * @return  void
	 */
	protected function fetchConfigurationData()
	{
		return array();
	}
}

JCli::getInstance('HelloWorld')->execute();
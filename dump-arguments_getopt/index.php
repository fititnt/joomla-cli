<?php
/**
 * @package     CLIArgumentsDump
 * @author      Emerson Rocha Luiz - @fititnt ( http://fititnt.org )
 * @copyright   Copyright (C) Joomla! Coders Brazil @JCoderBR. All rights reserved.
 * @license     GNU General Public License version 3
 */
define( '_JEXEC', 1 ); // You MUST define it. Or Joomla Framework will not load
include_once dirname(__FILE__) . "../../../../joomla/joomla-platform/libraries/import.php"; //path to Joomla-platform
jimport( 'joomla.application.cli' );

/*
 * Dump params vars using PHP getopt function ( http://php.net/manual/en/function.getopt.php )
 * On windows, PHP 5.3+ is requerid
 */
class CLIArgumentsDump extends JCli
{
    public function argsDump( $options )
        {        
        $this->out( 'PHP getopt() output: ' );
        $this->outArrayBi( $options );
        }
        
	/**
	 * Write a array bidimensional output.
	 *
	 * @param   array  $array    The array to output.
	 *
	 * @return  void
	 *
	 * @since   
	 */
        public function outArrayBi($array){
            foreach($array AS $key => $item ){
                $this->out( $key . ' => ' .$item );
            }
        }
}
JCli::getInstance( 'CLIArgumentsDump' )->argsDump( getopt('a:b:c:d:e:f:g:h:i:j:k:l:m:n:o:p:q:r:s:t:u:v:x:z:') );
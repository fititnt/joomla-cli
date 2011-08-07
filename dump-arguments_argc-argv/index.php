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
 * Dump aditional parameters vars $argc and $argv ( http://php.net/manual/en/features.commandline.php )
 */

class CLIArgumentsDump extends JCli
{
    public function argsDump( $argc, $argv)
        {        
        $this->out( 'Number of arguments ($argc):' );
        $this->out( $argc );        
        $this->out( 'Array of arguments $argv:' );
        $this->outArray( $argv );//$this->out( $argv );//Doesent works for array
        }
        
	/**
	 * Write a array unidimencional output.
	 *
	 * @param   array  $array    The array to output.
	 *
	 * @return  void
	 *
	 * @since   
	 */
        public function outArray($array){
            foreach($array AS $item){
                $this->out( $item );
            }
        }
}

JCli::getInstance( 'CLIArgumentsDump' )->argsDump( $argc, $argv );

/* Example of command and output (Win7, Xampp, PHP 5.3

//C:\Users\fititnt>C:\xampp\php\php.exe "C:\Users\fititnt\Joomla\GIT\fititnt\jooml
//a-cli\hello-world_arguments\index.php" varA VarB VarC VarD
Number of arguments ($argc):
5
Array of arguments $argv:
C:\Users\fititnt\Joomla\GIT\fititnt\joomla-cli\hello-world_arguments\index.php
varA
VarB
VarC
VarD


//C:\Users\fititnt>C:\xampp\php\php.exe "C:\Users\fititnt\Joomla\GIT\fititnt\jooml
//a-cli\hello-world_arguments\index.php" -a VarA -b Varb -c Varc -dVarD
Number of arguments ($argc):
8
Array of arguments $argv:
C:\Users\fititnt\Joomla\GIT\fititnt\joomla-cli\hello-world_arguments\index.php
-a
VarA
-b
Varb
-c
Varc
-dVarD
 */

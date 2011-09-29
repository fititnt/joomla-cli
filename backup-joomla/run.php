<?php
/**
 * @package     Joomla Backup
 * @author      Emerson Rocha Luiz - @fititnt ( http://fititnt.org )
 * @copyright   Copyright (C) Joomla! Coders Brazil @JCoderBR. All rights reserved.
 * @license     GNU General Public License version 3
 */
define( '_JEXEC', 1 ); // You MUST define it. Or Joomla Framework will not load
include_once dirname(__FILE__) . "../../../../joomla/joomla-platform/libraries/import.php"; //path to Joomla-platform
jimport( 'joomla.application.cli' );


class Backup extends JCli
{
    
    /* Host of database
     * 
     * @var     string 
     */
    private $host = 'localhost';

    /* User of database
     * 
     * @var     string 
     */
    private $user = 'root';
    
    /* User of database
     * 
     * @var     string 
     */
    private $password = '';
    
    
    /* Name of database
     * 
     * @var     string 
     */
    private $name = 'db_bame';
    
    /* Prefix of tables
     * 
     * @var     string 
     */
    private $prefix = '';
    
    /* Path of files to backup
     * 
     * @var     string 
     */
    private $path = NULL;
    
    /* Path of files to backup
     * 
     * @var     string 
     */
    private $email = NULL;
    
    
    /*
     * 
     * 
     */    
    public function execute( )
    {
        //
    }
    
    /* Set email to send backup
     * 
     * @var     string      $value
     * 
     * @return  object      $this
     * 
     */    
    public function email( $value )
    {
        if ( $value )
        {
            $this->email = $value;
        }
        
        return $this;
    }
    
    /* Set path to save backup
     * 
     * @var     string      $value
     * 
     * @return  object      $this
     * 
     */    
    public function file( $value )
    {
        if ( $value )
        {
            $this->path = $value;
        }
        
        return $this;
    }
    
    /*
     * Save database to a file
     * 
     */    
    private function dbToFile( )
    {
        //
    }
    
    /*
     * 
     * 
     */    
    private function sendEmail( )
    {
        //
    }
}
JCli::getInstance( 'Backup' )->execute( );
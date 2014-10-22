<?php
/*------------------------------------------------------------------------
# plg_stopsoparibon - System - Stop Sopa Ribon
# ------------------------------------------------------------------------
# author    Sabuj Kundu
# copyright Copyright (C) 2012 codeboxr.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://codeboxr.com
# Technical Support:  Forum - http://manchumahara.com
-------------------------------------------------------------------------*/

//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

jimport( 'joomla.plugin.plugin' );
 
/**
 * Adminbranding system plugin
 */
class plgSystemStopSopaRibon extends JPlugin
{
	/**
	 * Constructor.
	 *
	 * @access	protected
	 * @param	object	$subject The object to observe
	 * @param 	array   $config  An array that holds the plugin configuration
	 * @since	1.0
	 */
	public function __construct( &$subject, $config )
	{
            parent::__construct( $subject, $config );
            $app = & JFactory::getApplication(); //global $mainframe;  in j1.5       

            // Do some extra initialisation in this constructor if required
            // load plugin parameters
            //$this->_plugin = JPluginHelper::getPlugin( 'system', 'stopsoparibon' );
            //$this->_params = new JParameter( $this->_plugin->params );
            // return if params are empty
            if(!$this->params) return;
            //change admin header portion            
            // admin login page                       
            if ($app->isAdmin()) { return;}
            
	}
 
	/**
	 * Do something onAfterInitialise 
	 */
	function onAfterInitialise()
	{
	      $app = & JFactory::getApplication(); //global $mainframe;  in j1.5       
              if ($app->isAdmin()) { return;}
	}
 
	/**
	 * Do something onAfterRoute 
	 */
	function onAfterRoute()
	{
            $app = & JFactory::getApplication(); //global $mainframe;  in j1.5       
            if ($app->isAdmin()) { return;}
	}
 
	/**
	 * Do something onAfterDispatch 
	 */
	function onAfterDispatch()
	{
            $app = & JFactory::getApplication(); //global $mainframe;  in j1.5       
            if ($app->isAdmin()) { return;}
            //$doc = &JFactory::getDocument();            
            
	}
 
	/**
	 * Do something onAfterRender 
	 */
	function onAfterRender()
	{
            $app = & JFactory::getApplication(); //global $mainframe;  in j1.5       
            if ($app->isAdmin()) { return;}
            
            $body = JResponse::getBody();
            $button_url = JURI::root().'plugins/system/stopsoparibon/stopsoparibon/stop-sopa-ribbon.png';
            $ribon = '<a target="_blank" class="stop-sopa-ribbon" href="http://americancensorship.org/"><img src="'.$button_url.'" alt="Stop SOPA" style="position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;" /></a>';
            $body = str_replace('</body>',$ribon.'</body>', $body);
            JResponse::setBody($body);
	}
}

<?php
/**
 * AMBER Alert REST API.
 *
 * @category   API
 * @package    AA-Api
 * @author     George Pantazis <ggpanta@gmail.com>
 * @copyright  2013 George Pantazis
 * @license    http://opensource.org/licenses/MIT
 * @link       http://83.212.111.246/
 * @version    1.0.1
 */

require_once('db.php');

class country 
{
    public $restler;

	function providers ()
	{
	$prList = file('../tmp/providers.arr');
	return array('providers' => $prList);
	}
	
	function contact ($country)
	{
	$que = 'SELECT * FROM `contact` WHERE `iso`="'.$country.'"';

	if ($country == Null) {
		return array('missing-children'=>'116 000','emergency'=>'112');
	}

	$results = DB::query($que);
	$expcont = array_keys($results);

	return $results[$expcont[0]];
	}

}

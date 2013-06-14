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

class data
{
    public $restler;

	function providers ()
	{
	$prList = file('../../tmp/providers.arr');
	return array('providers' => $prList);
	}

	function countries ()
	{
	$que = 'SELECT * FROM `contact`';
	$results = DB::query($que);

	foreach ($results as $item) {
	$allItems[]=$item['iso'];
	}
	$result = array('countries'=>$allItems);
        return $result;
        }

	function summary ()
	{
	$result = new stdClass();

	$chList = file('../../tmp/chLNames.arr');
        $prList = file('../../tmp/providers.arr');

	$result->providers = array('providers'=>count($prList));

	$que = 'SELECT * FROM `contact`';
        $results = DB::query($que);
        $result->countries = array('total'=>count($results));
	
	$result->children = array('children'=>count($chList));

	return $result;
	}

}

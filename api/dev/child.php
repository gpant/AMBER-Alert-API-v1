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

class child
{
    public $restler;

	function providers ()
	{
	$prList = file('../tmp/providers.arr');
	return array('providers' => $prList);
	}

        function details ($id)
        {
        echo $id;
        }

	function status ($id)
	{
	echo $id;
	}
}

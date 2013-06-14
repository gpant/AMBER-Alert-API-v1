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

#ini_set("auto_detect_line_endings", true);

class children 
{
    public $restler;

	function get_country ($desc)
        {
                $eu_countries = array("Albania","Andorra","Armenia","Austria","Azerbaijan",
                                        "Belarus","Belgium","Bosnia and Herzegovina","Bulgaria",
                                        "Croatia","Cyprus","Czech Republic","Denmark","Estonia",
                                        "Finland","France","Georgia","Germany","Greece","Hungary",
                                        "Iceland","Ireland","Italy","Kosovo","Latvia","Liechtenstein",
                                        "Lithuania","Luxembourg","Macedonia","Malta","Moldova","Monaco",
                                        "Montenegro","The Netherlands","Norway","Poland","Portugal",
                                        "Romania","Russia","San Marino","Serbia","Slovakia","Slovenia",
                                        "Spain","Sweden","Switzerland","Turkey","Ukraine","United Kingdom",
                                        "Vatican City");
                $cFound = '';
                foreach ($eu_countries as &$country) {
                        $pos = strpos($desc, $country);

                        if ($pos !== false) {
	                        $cFound = $country;
			}
                }
        return $cFound;
        }	

	function names ()
	{
	$chInFile = @fopen('../../tmp/chLNames.arr', 'r');
	
		while (( $chList = fgetcsv($chInFile, 0, ",") ) !== FALSE) {
			if ($chList[0] !== Null) {
				$result[] =  array('id'=>$chList[0], 'name'=>$chList[1]);
			}
			}

	return $result;
	fclose($chInFile);
	}

	function latest ($country)
	{

        $result = new stdClass();
        $chInFile = @fopen('../../tmp/NLD.csv', 'r');
                $chList = fgetcsv($chInFile, 0, ",");
                $result->latest =  array(
					'id'=>$chList[0],
					'name'=>$chList[1],
					'publication-date'=>$chList[5],
					'country'=>$this->get_country($chList[3]),
					'description'=>$chList[3],
					'remote-photo'=>$chList[4],
					'link'=>$chList[2]);

        return $result;
        fclose($chInFile);

	}

	function all ()
	{

        $chInFile = @fopen('../../tmp/NLD.csv', 'r');
                while (( $chList = fgetcsv($chInFile, 0, ",") ) !== FALSE) {
			
			if ($chList[0] !== Null) {
	                        $result[] =  array(
				'id'=>$chList[0],
				'name'=>$chList[1],
				'link'=>$chList[2],
				'description'=>$chList[3]);
			}
               }

        return $result;
        fclose($chInFile);

        }

	function total ()
	{
	$chList = file('../../tmp/chLNames.arr');
	return array('total' => count($chList));
	}

}

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

### Ver 3 Restler
#require_once '../../vendor/restler.php';
#use Luracast\Restler\Restler;



###Ver 2 Restler
set_include_path(get_include_path() . PATH_SEPARATOR . '../../restler');

spl_autoload_register('spl_autoload');


$r = new Restler();
$r->setSupportedFormats('JsonFormat', 'XmlFormat', 'YamlFormat', 'PlistFormat', 'AmfFormat');
$r->addAPIClass('children');
$r->addAPIClass('data');
$r->addAPIClass('country');
$r->addAPIClass('contact');
$r->addAPIClass('child');
$r->handle();

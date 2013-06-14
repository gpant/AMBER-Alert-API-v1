<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>AMBER Alert API v1</title>
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="css/aa.css" media="screen" />
</head>
<body>

<h1>AMBER Alert API v1 pre ALPHA</h1>

<h2>Components</h2>
<table class="gradienttable">
	<tr>
	<th width=180>API</th><th width=180>Helpers</th><th width=150>Modules</th><th width=150>Apps</th>
	</tr>
	<tr>
        <td>api (WIP) <a href="api/changelog.txt">Changelog</a></td><td>xmlparser (WIP) <a href="xmlparser/changelog.txt">Changelog</a></td><td>Joomla Module (WIP)</td><td>Android</td>
        </tr>
        <tr>
        <td></td><td></td><td>Wordpress Module</td><td>iOS</td>
        </tr>
        <tr>
        <td></td><td></td><td></td><td>Linux</td>
        </tr>
        <tr>
        <td></td><td></td><td></td><td>OS X</td>
        </tr>
        <tr>
        <td></td><td></td><td></td><td>Windows</td>
        </tr>                        
</table>

<hr>

<h3>Namespace</h3>
<table class="gradienttable">
    <tr>
    <th width=150>Namespace</th><th width=450>Data Type</th>
    </tr>
    <tr>
    <td>/children/</td><td>Returns information about the Children DB, no lookup needed</td>
    </tr>
    <tr>
    <td>/child/</td><td>Specific Data for child, requires ID, optionally can request specific info</td>
    </tr>
    <tr>
    <td>/data/</td><td>Information on data sources and DB stats</td>
    </tr>	
    <tr>
    <td>/country/</td><td>Overload of /children/ with ability to filter by country</td>
    </tr>
    <tr>
    <td>/contact/</td><td>Returns contact information (moved to country)</td>
    </tr>	
</table>	
	
<h3>API Calls</h3>
<h4>Child</h4>
<table class="gradienttable">
    <tr>
    <th width=10>></th><th width=300>Call</th><th width=200>Test</th>
    </tr>
    <tr>
    <td></td><td>/api/v1/child/details/[id]</td><td></td>
	</tr>	
</table>

<h4>Children</h4>
<table class="gradienttable">
    <tr>
    <th width=10>></th><th width=300>Call</th><th width=200>Test</th>
    </tr>
    <tr>
    <td>></td><td>/api/v1/children/names</td><td><a href="/api/v1/children/names">names</a> / <a href="/api/v1/children/names.json">names (json ex.)</a></td>
    </tr>
    <tr>
    <td></td><td>/api/v1/children/all</td><td><a href="/api/v1/children/all">all</a> / <a href="/api/v1/children/all.plist">all (plist ex.)</a></td>
	</tr>
	<tr>
	<td>></td><td>/api/v1/children/total</td><td><a href="/api/v1/children/total">total</a> / <a href="/api/v1/children/total.xml">total (xml ex.)</a></td>
    <tr>
    <td>></td><td>/api/v1/children/latest/{country}</td><td><a href="/api/v1/children/latest">latest</a> / <a href="/api/v1/children/latest.yaml">latest (yaml ex.)</a></td>
    </tr>
    <tr>
    <td></td><td>/api/v1/children/last/[number]</td><td></td>
    </tr>
</table>

<h4>Country</h4>
<table class="gradienttable">	
    <tr>
    <th width=10>></th><th width=300>Call</th><th width=200>Test</th>
    </tr>
    <tr>
    <td></td><td>/api/v1/country/all</td><td></td>
    </tr>
    <tr>
    <td></td><td>/api/v1/country/total</td><td></td>
    </tr>	
    <tr>
    <tr>
    <td></td><td>/api/v1/country/latest</td><td></td>
    </tr>	
    <td></td><td>/api/v1/country/last/[number]</td><td></td>
    </tr>
    <tr>
    <td></td><td>/api/v1/country/contact/{country}</td><td> <a href="/api/v1/country/contact/">contact</a> / <a href="/api/v1/country/contact/GR">contact (country ex.)</a></td>
    </tr>
    <tr>
    <td></td><td>/api/v1/country/region</td><td></td>
    </tr>	
</table>

<h4>Data</h4>
<table class="gradienttable">
    <tr>
    <th width=10>></th><th width=300>Call</th><th width=200>Test</th>
    </tr>
    <tr>
    <td>></td><td>/api/v1/data/providers</td><td><a href="/api/v1/data/providers">providers</a></td>
    </tr>
    <tr>
    <td></td><td>/api/v1/data/countries</td><td><a href="/api/v1/data/countries">countries</a></td>
    </tr>
    <tr>
    <td>></td><td>/api/v1/data/summary</td><td><a href="/api/v1/data/summary">summary</a></td>
    </tr>
</table>
<pre>
Calls Marked with a > are considered final.
Options in [] are considered compulsory, Options in {} are optional.
</pre>

<h4>API Notes</h4>
<hr>
<pre>Multiformat API Calls supported by adding a suffix or by setting the MIME type in HTTP Accept Header. By default all replies are in json, in case of browsers the reply is xml due to it being a requested format.</pre>
<pre>Supported Formats: .json, .xml, .yaml, .plist, .amf</pre>

<h4>Setup Notes</h4>
<hr>
<pre>Web Server rewriting</pre>
<a href="docs/lighttpd/rewrite">Lighttpd</a> <a href="docs/apache/.htaccess">Apache</a><br />

<h3>Full Dump</h3>
Download: <a href="aa-api.tar.gz">aa-api</a> Last Change on: <?php echo date("Y-m-d H:i:s",filemtime("aa-api.tar.gz")) ?>

<h4>Developers</h4>
<hr>
<table class="gradienttable">
        <tr>
        <th width=200>Module</th><th width=200>Developer</th><th width=200>eMail</th>
        </tr>
        <tr>
        <td>API</td><td>George Pantazis</td><td>ggpanta at gmail dot com</td>
        </tr>
        <tr>
        <td>xmlparser</td><td>George Pantazis</td><td>ggpanta at gmail dot com</td>
        </tr>
        <tr>
        <td>Object/Case/History Models</td><td>Christos KK Loverdos</td><td>loverdos at gmail dot com</td>
        </tr>
        <tr>
        <td>Java (L/M/W) Clients</td><td>Christos KK Loverdos</td><td>loverdos at gmail dot com</td>
        </tr>
        <tr>
        <td>Joomla Module</td><td>Jason Georgiades</td><td>jason at esg dot io</td>
        </tr>
        <tr>
        <td>Android</td><td>George Pantazis</td><td>ggpanta at gmail dot com</td>
        </tr>
</table>

<h4>Translators</h4>
<hr>
<table class="gradienttable">
        <tr>
        <th width=150>Language</th><th width=200>Translator</th><th width=200>eMail</th>
        </tr>
        <tr>
        <td>GR</td><td>Dimitris Ceci Galanos</td><td>dcgalanos at gmail dot com</td>
        </tr>
        <tr>
        <td>IT</td><td>Dimitris Ceci Galanos</td><td>dcgalanos at gmail dot com</td>
        </tr>
        <tr>
        <td>FR</td><td>Dimitris Ceci Galanos</td><td>dcgalanos at gmail dot com</td>
        </tr>		
        <tr>
        <td>RO</td><td>Alina Stefanescu</td><td>er.sunsetter at gmail dot com</td>
        </tr>
        <tr>
        <td>DE</td><td></td><td></td>
        </tr>		
</table>

<br /><br />
Licensed under the <a href="http://opensource.org/licenses/MIT">OSI MIT License</a>


<br /><br />
<pre>Used in this Project</pre>
<p>
<img src="images/poweredby.png" width="88" height="31" alt="Powered by GNU/Linux" />
<a href="http://www.lighttpd.net/"><img src="images/light_button.png" width="80" height="27" alt="Powered by Lighttpd" /></a>
<a href="http://luracast.com/products/restler/"><img src="images/RestlerIcon_40.png"/></a>
<a href="http://xcache.lighttpd.net/"><img src="images/xcache.png"/><a/>
<a href="http://www.meekro.com/index.php">MeekroDB</a>
</p>
</body>
</html>


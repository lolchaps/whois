<?php

include 'src/Phois/Whois/Whois.php';

if(!isset($_GET["domain"])) {
	echo 'sample url: http://php-whois.dev/?domain=xyz.ie';
}

if(isset($_GET["domain"])) {
	$sld = strip_tags(stripslashes($_GET["domain"]));

	/*$sld = 'xyz.ie';*/

	$domain = new Phois\Whois\Whois($sld);

	$whois_answer = $domain->info();

	echo "<pre>" . $whois_answer . "</pre>";

	if ($domain->isAvailable()) {
	    echo "Domain is available\n";
	} else {
	    echo "Domain is registered\n";
	}
}

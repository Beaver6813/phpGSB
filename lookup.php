<?php
/**
 * phpGSB - PHP Google Safe Browsing Implementation
 * Released under New BSD License (see LICENSE)
 * Copyright (c) 2010-2012, Sam Cleaver (Beaver6813, Beaver6813.com)
 * All rights reserved.
 *
 * LOOKUP EXAMPLE
 */
include('config.php');
require("phpgsb.class.php");
$phpgsb = new phpGSB($config['db'], $config['user'], $config['pass'], $config['host']);

// Obtain an API key from: http://code.google.com/apis/safebrowsing/key_signup.html
$phpgsb->apikey = $config['api_key'];

$phpgsb->usinglists = array('googpub-phish-shavar','goog-malware-shavar');
// Should return false (not phishing or malware)
var_dump($phpgsb->doLookup('http://www.google.com'));
// Should return true, malicious URL
var_dump($phpgsb->doLookup('http://www.gumblar.cn'));

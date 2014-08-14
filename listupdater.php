<?php
/**
 * phpGSB - PHP Google Safe Browsing Implementation
 * Released under New BSD License (see LICENSE)
 * Copyright (c) 2010-2012, Sam Cleaver (Beaver6813, Beaver6813.com)
 * All rights reserved.
 *
 * UPDATER EXAMPLE
 */
include("config.php");
require("phpgsb.class.php");
$phpgsb = new phpGSB($config['db'], $config['user'], $config['pass'], $config['host'], true);

// Obtain an API key from: http://code.google.com/apis/safebrowsing/key_signup.html
$phpgsb->apikey = $config['api_key'];
$phpgsb->usinglists = array('googpub-phish-shavar','goog-malware-shavar');
$phpgsb->runUpdate();

<?php

/**
 *
 * Configuration
 * Changes in this file will overwrite default values
 *
 **/

// Set file path to your nagios status log
$statusFile = '/usr/local/icinga/var/spool/temp/status.dat';

// Objects file
$objectsFile = '/usr/local/icinga/var/spool/temp/objects.cache';

// Show IP addresses of hosts
// $showAddresses = TRUE;

// Refresh time in seconds
// $refresh = 10; 

// Show warning state if status file was last updated <num> seconds ago
// Set this to a higher value then status_update_interval in your
// nagios.cfg
// $statusFileTimeout = 60; 

// Filter hosts - filter hosts with (only machines starting with  'brno-')
// $hostFilter = function ($match) { return preg_match('/^brno-/', $match); };


// Enable fortune output
// $enableFortune = false;
// $fortunePath = "/usr/games/fortune";

// Set to callable to write custom heading by function
// $nagliteHeading = function() { echo("<h2>This is Naglite3</h2>\n"); };
// Set to string to write the string
// $nagliteHeading = '<Your Custom Heading>';
//

<?php

global $project;
$project = 'mysite';

global $database;
$database = 'giltrap_db';

// Fulltext setup (if necessary)
//FulltextSearchable::enable();

// Set the site locale

require_once("conf/ConfigureFromEnv.php");

Requirements::set_combined_files_enabled('true');

if (!Director::isDev()) {
    SS_Log::add_writer(new SS_LogEmailWriter('admin@brrdigital.com'), SS_Log::ERR);
}

// Silently fails if not on live environment
@include '_live_config.php';

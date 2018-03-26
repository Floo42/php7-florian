<?php
$json = file_get_contents(__DIR__.'/../data/shows.json');
$shows = json_decode($json, true);

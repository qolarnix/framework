<?php

// local site must be running for static build
$site_port = '3000';
$site_content = file_get_contents('http://localhost:' . $site_port . '');

// tidy extension must be installed and enabled in php ini
// sudo pacman -S php-tidy
$tidy_config = array(
  'indent' => true,
  'output-xhtml' => true,
  'wrap' => 200,
);
$tidy = new \tidy;
$tidy->parseString($site_content, $tidy_config, 'utf8');
$tidy->cleanRepair();

// convert $tidy object to string
$clean_site_content = (string) $tidy;

// replace script tag with new path
$js_path = '.framework/build/script.js';
$fixed_site_content = str_replace($js_path, '../build-static/script.js', $clean_site_content);

// send output to html file
file_put_contents('../build-static/index.html', $fixed_site_content);
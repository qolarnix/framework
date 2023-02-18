<?php

$site_port = '3000';
$site_content = file_get_contents('http://localhost:' . $site_port . '');

$tidy_config = array(
  'indent' => true,
  'output-xhtml' => true,
  'wrap' => 200
);
$tidy = new \tidy;
$tidy->parseString($site_content, $tidy_config, 'utf8');
$tidy->cleanRepair();

$clean_site_content = (string) $tidy;
$js_path = '.framework/build/script.js';
$fixed_site_content = str_replace($js_path, '../build/script.js', $clean_site_content);

file_put_contents('../build-static/index.html', $fixed_site_content);
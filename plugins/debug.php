<?php

/**
 * Debug to browser console
 * 
 * This function is for development purposes only
 * and should not be used in production
 */

function console_log(string|array $data, string|bool $prefix = false) {
  $output = $data;

  if(is_array($output))
    $output = implode(',', $output);

  if(is_string($prefix))
    echo "<script>console.log('".$prefix.": ".$output."');</script>";
  else
    echo "<script>console.log('".$output."');</script>";
}

function console_error(string|array $data) {
  $output = $data;

  if(is_array($output))
    $output = implode(',', $output);

  echo "<script>console.error('Error: ".$output."');</script>";
}
<?php

function get_template_part($slug, $args = array()) {
  $templates = array();
  $templates[] = "{$slug}.php";

  if(!locate_template($templates, true, false, $args)) {
    return false;
  }
}

function locate_template($template_names, $load = false, $require_once = true, $args = array()) {
  $located = '';

  foreach((array) $template_names as $template_name) {
    if(!$template_name) {
      continue;
    }

    $path_pages = getcwd() . '/pages/' . $template_name;
    $path_components = getcwd() . '/components/' . $template_name;

    if(file_exists($path_pages)) {
      $located = $path_pages;
      break;
    }
    elseif(file_exists($path_components)) {
      $located = $path_components;
      break;
    }
    else {
      trigger_error(
        'Unable to locate template in ' . $path_pages . ' or ' . $path_components . ' or ' . $path_index,
        E_USER_ERROR
      );
    }
  }

  if($load && '' !== $located) {
    load_template($located, $require_once, $args);
  }

  return $located;
}

function load_template($_template_file, $require_once = true, $args = array()) {
  if($require_once) {
    require_once $_template_file;
  }
  else {
    require $_template_file;
  }
}
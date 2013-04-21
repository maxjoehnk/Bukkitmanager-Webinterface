<?php
function get_host() {
  if ($host = $_SERVER['HTTP_X_FORWARDED_HOST']) {
    $elements = explode(',', $host);
    $host = trim(end($elements));
  }else {
    if (!$host = $_SERVER['HTTP_HOST']) {
      if (!$host = $_SERVER['SERVER_NAME']) {
        $host = !empty($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
      }
    }
  }
  $host = preg_replace('/:\d+$/', '', $host);
  return trim($host);
}
?>
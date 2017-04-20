<?php

$posts = json_decode(file_get_contents("./posts.json", FILE_USE_INCLUDE_PATH));

function get_slug($slug) {
  return "post/" . $slug;
}

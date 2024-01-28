<?php
function slugify($slug)
{
  $name = str_replace('-', ' ', $slug);  // Replace hyphens with spaces
  $name = ucwords($name);  // Capitalize first letter of each word
  // Apply other reverse transformations as needed
  return $name;
}

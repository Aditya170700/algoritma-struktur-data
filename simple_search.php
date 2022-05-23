<?php

function simpleSearch($lists, $search)
{
  asort($lists);
  foreach ($lists as $list) {
    if ($list === $search) {
      return true;
    }
  }
  return false;
}

$lists = ['a', 'z', 'b', 'd', 'r', 't', 'd', 'u', 'g'];

var_dump(simpleSearch($lists, 'q'));

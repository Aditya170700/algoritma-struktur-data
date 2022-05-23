<?php

function binarySearch($lists, $search)
{
  asort($lists);
  $low = 0;
  $high = count($lists) - 1;

  while ($low <= $high) {
    $mid = floor(($high + $low) / 2);
    $guess = $lists[$mid];
    if ($guess == $search) {
      return $mid;
    } elseif ($guess > $search) {
      $high = $mid - 1;
    } else {
      $low = $mid + 1;
    }
  }
  return null;
}

$lists = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(binarySearch($lists, 7));

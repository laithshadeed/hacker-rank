<?php
/**
 * Anagram Solution
 *
 * PHP Version 5
 *
 * @category  PHP
 * @package   HackerRank
 * @author    Laith Shadeed <hi@l3.io>
 * @copyright 2015 Laith Shadeed
 * @license   Public Domain
 * @link      https://www.hackerrank.com/challenges/anagram
 */

/**
 * Test by running
 * $ diff -u <(cat anagram.input | php anagram.php) anagram.output
 */


$input = new SplFileObject("php://stdin");
$input->fscanf("%d");

while (list($str) = $input->fscanf("%s")) {
  $n = strlen($str);

  // No integer division in PHP.
  $a = $n / 2;

  // If $a is not int, then $n is odd.
  if (!is_int($a)) {
    print "-1\n";
    continue;
  }

  // Hash the second word.
  $h = [];
  for ($i = $a; $i < $n; $i++) {
    $c     = $str[$i];
    $h[$c] = isset($h[$c]) ? $h[$c] + 1 : 1;
  }

  $changes = 0;
  for ($i = 0; $i < $a; $i++) {
    $c = $str[$i];

    if (isset($h[$c]) && $h[$c] > 0) {
      $h[$c] = $h[$c] - 1;
    } else {
      $changes++;
    }
  }

  print $changes."\n";
}//end while

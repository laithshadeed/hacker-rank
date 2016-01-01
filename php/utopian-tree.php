<?php
/**
 * Utopian Tree Solution
 *
 * PHP Version 5
 *
 * @category  PHP
 * @package   HackerRank
 * @author    Laith Shadeed <hi@l3.io>
 * @copyright 2015 Laith Shadeed
 * @license   Public Domain
 * @link      https://www.hackerrank.com/challenges/utopian-tree
 */

/**
 * Test by running
 * $ diff -u <(cat utopian-tree.input | php utopian-tree.php) utopian-tree.output
 */

fscanf(STDIN, "%d\n", $t);

for ($i = 1; $i <= $t; $i++) {
  fscanf(STDIN, "%d\n", $n);
  $h = 1;
  for ($j = 1; $j <= $n; $j++) {
    if ($j % 2 == 0) {
        $h++;
    } else {
        $h *= 2;
    }
  }
  
  print $h . "\n";
}

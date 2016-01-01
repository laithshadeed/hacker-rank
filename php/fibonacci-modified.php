<?php
/**
 * Fibonacci Modified Solution
 *
 * PHP Version 5
 *
 * @category  PHP
 * @package   HackerRank
 * @author    Laith Shadeed <hi@l3.io>
 * @copyright 2015 Laith Shadeed
 * @license   Public Domain
 * @link      https://www.hackerrank.com/challenges/huarongdao
 */

/**
 * <b>Problem Statement</b>
 *
 * A series is defined in the following manner:
 *
 * Given the nth and (n+1)th terms, the (n+2)th can be computed
 * by the following relation Tn+2 = (Tn+1)2 + Tn
 *
 * So, if the first two terms of the series are 0 and 1:
 * the third term = 12 + 0 = 1
 * fourth term = 12 + 1 = 2
 * fifth term = 22 + 1 = 5
 * ... And so on.
 *
 * Given three integers A, B and N, such that the first two terms of
 * the series (1st and 2nd terms) are A and B respectively,
 * compute the Nth term of the series.
 *
 * <b>Input Format</b>
 *
 * You are given three space separated integers A, B and N on one line.
 *
 * <b>Input Constraints</b>
 *
 * 0 <= A,B <= 2
 * 3 <= N <= 20
 *
 * <b>Output Format</b>
 *
 * One integer.
 * This integer is the Nth term of the given series when the first
 * two terms are A and B respectively.
 *
 * <b>Note</b>
 *
 * Some output may even exceed the range of 64 bit integer.
 *
 * <b>Sample Input</b>
 *
 * 0 1 5
 *
 * <b>Sample Output</b>
 *
 * 5
 *
 * <b>Explanation</b>
 *
 * The first two terms of the series are 0 and 1. The fifth term is 5.
 * How we arrive at the fifth term, is explained step by step in the
 * introductory sections.
 *
 * <b>Usage</b>
 * $ echo '0 1 5' | php fibonacci-modified.php
 */


$fp = fopen('php://stdin', 'r');
list($tN2, $tN1, $n) = explode(' ', fgets($fp));

for ($i = 3; $i <= $n; $i++) {
  $tN  = bcadd(bcmul($tN1, $tN1), $tN2);
  $tN2 = $tN1;
  $tN1 = $tN;
}

echo $tN."\n";

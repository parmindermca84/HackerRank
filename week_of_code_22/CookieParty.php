<?php
/**
 * You're having a cookie party tonight! You're expecting guests and you've already made cookies. You want to distribute all the cookies evenly between your guests in such a way that each guest receives the same number of whole cookies. If there are not enough cookies to give everyone the same amount, you must make some number of additional cookies.
 * Given n and m, find and print the minimum number of additional cookies you must make so that everybody receives the same number of cookies.
 *
 * Input Format
 * A single line of two space-separated integers describing the respective values of n and m.
 *
 * Output Format
 * Print a single integer denoting the number of additional cookies you need to make so that everyone at the cookie party has the same number of whole cookies.
 *
 * Sample Input
 * 3 2
 *
 * Sample Output
 * 1
 *
 * Explanation
 * There are people coming to your party and you've made cookies. For each person to have the same number of whole cookies, you must make additional cookie. Thus, we print as our answer.
 *
 * @author Parminder Singh <parmindermca84@gmail.com>
 */
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d %d", $n, $m);

if (empty($n) || empty($m)) {
	echo "Invalid inputs are entered.";
	exit;
}

$difference = 0;

if ($n > $m) {
	$difference = $n - $m;
} else if ($m % $n != 0) {
	$difference = $n - ($m % $n);
}

echo $difference;

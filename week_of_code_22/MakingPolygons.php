<?php
/**
 * A polygon is a closed shape with three or more sides. For example, triangles are polygons. A polygon is non-degenerate if it has no overlapping sides (and no sides of zero length).
 *
 * You have sticks with positive integer lengths, . You want to create a polygon using all sticks. Because this is not always possible, you can cut one or more sticks into two smaller sticks (they do not necessarily need to be of integer length) and repeat the process of trying to create a polygon using all the sticks. Given the lengths of all sticks, find and print the minimum number of cuts necessary to make a non-degenerate polygon.
 *
 * Input Format
 * The first line contains a single integer, .
 * The second line contains space-separated integers describing the respective values of .
 *
 * Output Format
 * Print a single integer denoting the minimum number of cuts required to make the sticks into a polygon.
 *
 * Sample Input 0
 * 3
 * 3 4 5
 *
 * Sample Output 0
 * 0
 *
 * Explanation 0
 * We can form a triangle without cutting any of the sticks, so we print on a new line.
 *
 * Sample Input 1
 * 3
 * 1 2 3
 *
 * Sample Output 1
 * 1
 *
 * Explanation 1
 * We can form a rectangle (convex quadrilateral) by cutting the stick having length into two sticks having lengths and . Because this requires one cut, we print on a new line.
 *
 * @author Parminder Singh <parmindermca84@gmail.com>

 *
 */
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);
$a_temp = fgets($handle);
$a = explode(" ", $a_temp);
array_walk($a, 'intval');

$cuts = 0;

if ( (count($a) == 1) ||
	 (count($a) == 2 && $a[0] == $a[1])
) {
	$cuts = 2;
} else {
	// Find longest value
	$max = max($a);
	$total = 0;
	$found = false;
	foreach ($a as $value) {
		if ($value == $max && !$found) {
			$found = true;
			continue;
		}
		$total += $value;
	}

	if ($max >= $total) {
		$cuts = 1;
	}
}
echo $cuts;
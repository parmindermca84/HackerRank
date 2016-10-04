<?php
/**
 * Leonardo loves primes and created queries where each query takes the form of an integer, . For each , he wants you to count the maximum number of unique prime factors of any number in the inclusive range and then print this value on a new line.
 *
 * Note: Recall that a prime number is only divisible by and itself, and is not a prime number.
 *
 * Input Format
 *
 * The first line contains an integer, , denoting the number of queries.
 * Each line of the subsequent lines contains a single integer, .
 *
 * Output Format
 *
 * For each query, print the maximum number of unique prime factors for any number in the inclusive range on a new line.
 *
 * Sample Input
 * 6
 * 1
 * 2
 * 3
 * 500
 * 5000
 * 10000000000
 *
 * Sample Output
 * 0
 * 1
 * 1
 * 4
 * 5
 * 10
 *
 * Explanation
 * The number of unique prime factors of is ; the only factor of is itself, and is not prime.
 * The number of unique prime factors of is ; the factors of are and , and is prime, hence for numbers in [1, 3] maximum is 1.
 * The number of unique prime factors of is ; the factors of are and , and is prime, hence for numbers in [1, 3], maximum is 1.
 * The number of unique prime factors of which is less than are all other numbers in range have or less unique prime factors.
 *
 * @author Parminder Singh <parmindermca84@gmail.com>
 */
$_fp = fopen("php://stdin", "r");

$arr = [];
while (!feof($_fp)) {
    $arr[] = fgets($_fp);
}
array_shift($arr);

foreach ($arr as $n) {

	$primeNumbers = [];

	for ($i = 2; $i <= $n; $i++) {

		$prime = true;

		for ($j = 2; $j <= $i / 2; $j++) {
			if ($i % $j == 0) {
				$prime = false;
				break;
			}
		}

		if ($prime) {
			$primeNumbers[] = $i;
		}

		// Calculate prime factors
		$primeFactors = 1;
		foreach ($primeNumbers as $key => $value) {
			$primeFactors *= $value;

			if ($primeFactors > $n) {
				unset($primeNumbers[$key]);
				break(2);
			}
		}
	}
	echo count($primeNumbers) . "\n";
}
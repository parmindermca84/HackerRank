<?php

/**
 * Objective
 * Check out the Tutorial tab for learning materials and an instructional video!
 *
 * Task
 * A Node class is provided for you in the editor. A Node object has an integer data field, , and a Node instance pointer, , pointing to another node (i.e.: the next node in a list).
 *
 * A removeDuplicates function is declared in your editor, which takes a pointer to the node of a linked list as a parameter. Complete removeDuplicates so that it deletes any duplicate nodes from the list and returns the head of the updated list.
 *
 * Note: The pointer may be null, indicating that the list is empty. Be sure to reset your pointer when performing deletions to avoid breaking the list.
 *
 * Input Format
 * You do not need to read any input from stdin. The following input is handled by the locked stub code and passed to the removeDuplicates function:
 * The first line contains an integer, , the number of nodes to be inserted.
 * The subsequent lines each contain an integer describing the value of a node being inserted at the list's tail.
 *
 * Constraints
 * The data elements of the linked list argument will always be in non-decreasing order.
 *
 * Output Format
 * Your removeDuplicates function should return the head of the updated linked list. The locked stub code in your editor will print the returned list to stdout.
 *
 * Sample Input
 * 6
 * 1
 * 2
 * 2
 * 3
 * 3
 * 4
 *
 * Sample Output
 * 1 2 3 4
 *
 * Explanation
 * N = 6, and our non-decreasing list is . The values and both occur twice in the list, so we remove the two duplicate nodes. We then return our updated (ascending) list, which is .
 */

/**
 * @author Parminder Singh <parmindermca84@gmail.com>
 */
class Node
{

	public $data;
	public $next;

	function __construct($d)
	{
		$this->data = $d;
		$this->next = NULL;
	}

}

class Solution
{

	function removeDuplicates($head)
	{
		$start = $head;
		$arr = [];
		while ($start) {
			if (in_array($start->data, $arr)) {
				unset($previous->next);
				$previous->next = $start->next;

			} else {
				$arr[] = $start->data;
				$previous = $start;
			}

			$start = $start->next;
		}

		return $head;
	}

	function insert($head, $data)
	{
		//complete this method
		$p = new Node($data);
		if ($head == null) {
			$head = $p;
		} else if ($head->next == null) {
			$head->next = $p;
		} else {
			$start = $head;
			while ($start->next != null) {
				$start = $start->next;
			}
			$start->next = $p;
		}
		return $head;
	}

	function display($head)
	{
		$start = $head;
		while ($start) {
			echo $start->data, ' ';
			$start = $start->next;
		}
	}

}

$T = intval(fgets(STDIN));
$head = null;
$mylist = new Solution();
while ($T-- > 0) {
	$data = intval(fgets(STDIN));
	$head = $mylist->insert($head, $data);
}
$head = $mylist->removeDuplicates($head);
$mylist->display($head);
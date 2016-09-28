<?php
/**
 * Objective
 * Today, we're going further with Binary Search Trees. Check out the Tutorial tab for learning materials and an instructional video!
 * Task
 * A level-order traversal, also known as a breadth-first search, visits each level of a tree's nodes from left to right, top to bottom. You are given a pointer, , pointing to the root of a binary search tree. Complete the levelOrder function provided in your editor so that it prints the level-order traversal of the binary search tree.
 * Hint: You'll find a queue helpful in completing this challenge.
 * Input Format
 * The locked stub code in your editor reads the following inputs and assembles them into a BST:
 * The first line contains an integer, (the number of test cases).
 * The subsequent lines each contain an integer, , denoting the value of an element that must be added to the BST.
 * Output Format
 * Print the value of each node in the tree's level-order traversal as a single line of space-separated integers.
 */

/**
 * @author Parminder Singh <parmindermca84@gmail.com>
 */ 
class Node
{
	public $Left, $Right;
	public $data;

	/**
	 * @author Parminder Singh <parmindermca84@gmail.com>
	 *
	 * @param int 		$data
	 *
	 * @throws Exception
	 */
	public function __construct($data)
	{
		if (empty($data)) {
			throw new Exception('InvalidArgument');
		}

		$this->Left = $this->Right = null;
		$this->data = $data;
	}
}

class Solution
{
	/**
	 * @author Parminder Singh <parmindermca84@gmail.com>
	 *
	 * @param null|Node	$Root
	 * @param int 		$data
	 *
	 * @return Node
	 * @throws Exception	 
	 */	
	public function Insert($Root, $data)
	{
		if (empty($data)) {
			throw new Exception('InvalidArgument');
		}

		if ($Root == null) {
			return new Node($data);
		}

		if ($data <= $Root->data) {			
			$Root->Left = $this->Insert($Root->Left, $data);
		} else {
			$Root->Right = $this->Insert($Root->Right, $data);
		}

		return $Root;
	}

	/**
	 * @author Parminder Singh <parmindermca84@gmail.com>
	 *
	 * @param null|Node	$Root
	 *
	 * @return int	 
	 */	
	public function levelOrder($Root){
  		$queue = [];

  		array_push($queue, $Root);

    	while (!empty($queue)) {
    		$Current = array_shift($queue);
        
        	echo $Current->data . " ";
    	
	    	if (!empty($Current->Left)) {
	    		array_push($queue, $Current->Left);
	    	}

	    	if (!empty($Current->Right)) {
	    		array_push($queue, $Current->Right);
	    	}
	    }
    }
}

$MyTree = new Solution();
$Root = null;
$T = intval(fgets(STDIN));
while ($T-- > 0) {
	$data = intval(fgets(STDIN));
	$Root = $MyTree->Insert($Root, $data);
}

$MyTree->levelOrder($Root);

<?php
/**
 * Problem: https://www.hackerrank.com/challenges/30-binary-search-trees
 * Objective
 * Today, we're working with Binary Search Trees (BSTs). Check out the Tutorial tab for learning materials and an instructional video!
 * Task
 * The height of a binary search tree is the number of edges between the tree's root and its furthest leaf. You are given a pointer, , pointing to the root of a binary search tree. Complete the getHeight function provided in your editor so that it returns the height of the binary search tree.
 * Input Format
 * The locked stub code in your editor reads the following inputs and assembles them into a binary search tree:
 * The first line contains an integer, , denoting the number of nodes in the tree.
 * Each of the subsequent lines contains an integer, , denoting the value of an element that must be added to the BST.
 * Output Format
 * The locked stub code in your editor will print the integer returned by your getHeight function denoting the height of the BST.
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
	public function GetHeight($Root) {
		if ($Root == null) {
        	return -1;
    	}

    	return 1 + max($this->GetHeight($Root->Left), $this->GetHeight($Root->Right));
    }
}

$MyTree = new Solution();
$Root = null;
$T = intval(fgets(STDIN));
while ($T-- > 0) {
	$data = intval(fgets(STDIN));
	$Root = $MyTree->Insert($Root, $data);
}

echo $MyTree->GetHeight($Root);

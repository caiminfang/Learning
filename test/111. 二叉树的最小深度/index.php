<?php
/**
给定一个二叉树，找出其最小深度。

最小深度是从根节点到最近叶子节点的最短路径上的节点数量。

说明: 叶子节点是指没有子节点的节点。

示例:

给定二叉树 [3,9,20,null,null,15,7],

3
/ \
9  20
/  \
15   7
返回它的最小深度  2.
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function minDepth($root) {
        if($root == null){
            return 0;
        }elseif($root->left == null || $root->right == null){
            return $this->minDepth($root->left) + $this->minDepth($root->right) +1;
        }else{
            $l = $this->minDepth($root->left);
            $r = $this->minDepth($root->right);
            return $l<$r ? $l+1:$r+1;
        }
    }
}
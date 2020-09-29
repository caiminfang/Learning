<?php
/**
给定一个二叉搜索树，同时给定最小边界L 和最大边界 R。通过修剪二叉搜索树，使得所有节点的值在[L, R]中 (R>=L) 。你可能需要改变树的根节点，所以结果应当返回修剪好的二叉搜索树的新的根节点。

示例 1:

输入:
1
/ \
0   2

L = 1
R = 2

输出:
1
\
2
示例 2:

输入:
3
/ \
0   4
\
2
/
1

L = 1
R = 3

输出:
3
/
2
/
1


来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/trim-a-binary-search-tree
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return TreeNode
     */
    function trimBST($root, $low, $high) {
        if($root == null) return $root;
        if($root->val > $high) return $this->trimBST($root->left,$low,$high);
        if($root->val < $low) return $this->trimBST($root->right,$low,$high);

        $root->left = $this->trimBST($root->left,$low,$high);
        $root->right = $this->trimBST($root->right,$low,$high);

        return $root;
    }
}

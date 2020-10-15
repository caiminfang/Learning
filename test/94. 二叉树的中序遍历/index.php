<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/15
 * Time: 上午9:15
给定一个二叉树，返回它的中序 遍历。

示例:

输入: [1,null,2,3]
1
\
2
/
3

输出: [1,3,2]

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/binary-tree-inorder-traversal
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
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $arr = $res = [];
        if ($root == null) {
            return $res;
        }
        //设置当前节点
        $cur = $root;//根节点
        while($cur!=null || !empty($arr)){
            if($cur!=null){ //如果当前叶子节点不为null
                array_push($arr, $cur);
                $cur = $cur->left;
            }else{
                $cur = array_pop($arr);
                $res[] = $cur->val;
                $cur = $cur->right;
            }
        }
        return $res;
    }
}

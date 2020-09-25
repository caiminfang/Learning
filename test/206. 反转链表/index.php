<?php
/**
反转一个单链表。

示例:

输入: 1->2->3->4->5->NULL
输出: 5->4->3->2->1->NULL
 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $res = null;
        $current = $head;
        while($current){
            $next = $current->next;
            $current->next = $res;
            $res = $current;
            $current = $next;
        }
        return $res;
    }
}

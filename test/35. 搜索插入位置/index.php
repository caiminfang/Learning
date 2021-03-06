<?php

/**
给定一个排序数组和一个目标值，在数组中找到目标值，并返回其索引。如果目标值不存在于数组中，返回它将会被按顺序插入的位置。

你可以假设数组中无重复元素。

示例 1:

输入: [1,3,5,6], 5
输出: 2
示例 2:

输入: [1,3,5,6], 2
输出: 1
示例 3:

输入: [1,3,5,6], 7
输出: 4
示例 4:

输入: [1,3,5,6], 0
输出: 0
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    //方法1：循环
    function searchInsert1($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            if ($target <= $nums[$i]) {
                return $i;
            } else {
                continue;
            }
        }
        return count($nums);
    }

    //方法2：二分法
    function  searchInsert($nums, $target) {
        $len = count($nums);
        $left = 0;
        $right = $len-1;
        while($left <=$right){
            $mid =(int)( ($left+$right)/2);
            if ($target == $nums[$mid]) return $mid;
            if ($target >$nums[$mid]){
                $left=$mid+1;
            }else{
                $right = $mid-1;
            }
        }
        return $left;
    }
}

$solution = new Solution();

$arr =[1,3,5,6];
$k =  7;

var_dump($solution->searchInsert($arr,$k));
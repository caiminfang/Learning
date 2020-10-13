<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/13
 * Time: 上午11:44
面试题 16.17. 连续数列
给定一个整数数组，找出总和最大的连续数列，并返回总和。

示例：

输入： [-2,1,-3,4,-1,2,1,-5,4]
输出： 6
解释： 连续子数组 [4,-1,2,1] 的和最大，为 6。
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $len = count($nums);
        if ($len < 1){
            return 0;
        }
        $b = $sum = $nums[0];

        for ($i = 1;$i <$len;$i++){
            if ($b > 0 ){
                $b = $b +$nums[$i];
            }else{
                $b = $nums[$i];
            }

            if ($b > $sum){
                $sum = $b;
            }
        }
        return $sum;
    }
}

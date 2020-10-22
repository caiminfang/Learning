<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/22
 * Time: 下午6:03
剑指 Offer 56 - II. 数组中数字出现的次数 II
在一个数组 nums 中除一个数字只出现一次之外，其他数字都出现了三次。请找出那个只出现一次的数字。



示例 1：

输入：nums = [3,4,3,3]
输出：4
示例 2：

输入：nums = [9,1,7,9,7,9,7]
输出：1


限制：

1 <= nums.length <= 10000
1 <= nums[i] < 2^31
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $ones=$twos = 0;
        foreach($nums as $num){
            $ones = $ones ^ $num & ~$twos;
            $twos = $twos ^ $num & ~$ones;
        }
        return $ones;
    }
}

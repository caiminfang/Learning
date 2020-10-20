<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/20
 * Time: 下午1:48
1588. 所有奇数长度子数组的和
给你一个正整数数组 arr ，请你计算所有可能的奇数长度子数组的和。

子数组 定义为原数组中的一个连续子序列。

请你返回 arr 中 所有奇数长度子数组的和 。



示例 1：

输入：arr = [1,4,2,5,3]
输出：58
解释：所有奇数长度子数组和它们的和为：
[1] = 1
[4] = 4
[2] = 2
[5] = 5
[3] = 3
[1,4,2] = 7
[4,2,5] = 11
[2,5,3] = 10
[1,4,2,5,3] = 15
我们将所有值求和得到 1 + 4 + 2 + 5 + 3 + 7 + 11 + 10 + 15 = 58
示例 2：

输入：arr = [1,2]
输出：3
解释：总共只有 2 个长度为奇数的子数组，[1] 和 [2]。它们的和为 3 。
示例 3：

输入：arr = [10,11,12]
输出：66


提示：

1 <= arr.length <= 100
1 <= arr[i] <= 1000
 */
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function sumOddLengthSubarrays($arr) {
        $sum=0;
        $len=count($arr);
        $this->arr=$arr;
        for($i=0;$i<$len;$i++){
            $this->getinfo($i,1,$arr[$i],$sum,$len);
        }
        return $sum;
    }
    function getinfo($i,$num,$tmp,&$sum,$len){
        if($i>=$len)return;
        if($num%2){
            $sum+=$tmp;
        }
        $this->getinfo($i+1,$num+1,$tmp+$this->arr[$i+1],$sum,$len);
    }
}

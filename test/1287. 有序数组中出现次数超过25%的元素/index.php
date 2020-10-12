<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/12
 * Time: 下午6:03
 * 1287. 有序数组中出现次数超过25%的元素
给你一个非递减的 有序 整数数组，已知这个数组中恰好有一个整数，它的出现次数超过数组元素总数的 25%。

请你找到并返回这个整数



示例：

输入：arr = [1,2,2,6,6,6,6,7,10]
输出：6


提示：

1 <= arr.length <= 10^4
 */
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findSpecialInteger($arr) {
        if (count($arr) < 2){
            return $arr[0];
        }
        $lenght = ceil(count($arr)*0.25);
        $temp = array_count_values($arr);
        foreach($temp as $k=>$v){
            if ($v > $lenght){
                return $k;
            }
        }
    }
}

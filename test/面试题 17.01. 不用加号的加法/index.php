<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/13
 * Time: 下午1:33
面试题 17.01. 不用加号的加法
设计一个函数把两个数字相加。不得使用 + 或者其他算术运算符。

示例:

输入: a = 1, b = 1
输出: 2


提示：

a, b 均可能是负数或 0
结果不会溢出 32 位整数
 */
class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function add($a, $b) {
        $sum = $a;
        while($b){
            $sum = $a ^$b;
            $b = ($a & $b) << 1;
            $a = $sum;
        }
        return $sum;
    }
}

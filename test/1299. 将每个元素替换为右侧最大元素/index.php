<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/20
 * Time: 下午4:34
1299. 将每个元素替换为右侧最大元素
给你一个数组 arr ，请你将每个元素用它右边最大的元素替换，如果是最后一个元素，用 -1 替换。

完成所有替换操作后，请你返回这个数组。



示例：

输入：arr = [17,18,5,4,6,1]
输出：[18,6,6,6,1,-1]


提示：

1 <= arr.length <= 10^4
1 <= arr[i] <= 10^5
 */
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr) {
        $max = -1;
        for ($i = count($arr)-1 ;$i >=0;$i--){
            $tmp = $arr[$i];
            $arr[$i] = $max;
            if ($tmp >$max){
                $max = $tmp;
            }
        }
        return $arr;
    }
}

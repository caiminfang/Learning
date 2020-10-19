<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/19
 * Time: 下午4:52
给定一个按非递减顺序排序的整数数组 A，返回每个数字的平方组成的新数组，要求也按非递减顺序排序。

 

示例 1：

输入：[-4,-1,0,3,10]
输出：[0,1,9,16,100]
示例 2：

输入：[-7,-3,2,3,11]
输出：[4,9,9,49,121]
 

提示：

1 <= A.length <= 10000
-10000 <= A[i] <= 10000
A 已按非递减顺序排序。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/squares-of-a-sorted-array
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortedSquares($A) {
        $res = [];
        $count = count($A);
        $posIndex = 0;
        $negIndex  = 0;
        while($posIndex<$count && $A[$posIndex]<0){
            $posIndex++;
        }
        $negIndex = $posIndex--;
        for($i=0;0<=$posIndex&&$negIndex<$count;$i++){
            $negPow = $A[$negIndex]*$A[$negIndex];
            $posPow  = $A[$posIndex]*$A[$posIndex];
            if($negPow<$posPow){
                $res[] = $negPow;
                $negIndex++;
            }else{
                $res[] = $posPow;
                $posIndex--;
            }
        }
        while($negIndex<$count){
            $res[] = $A[$negIndex]*$A[$negIndex];
            $negIndex++;
        }
        while($posIndex>=0){
            $res[] = $A[$posIndex]*$A[$posIndex];
            $posIndex--;
        }
        return $res;
    }
}

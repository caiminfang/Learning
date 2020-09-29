<?php
/**
给定一个非负整数 numRows，生成杨辉三角的前 numRows 行。    在杨辉三角中，每个数是它左上方和右上方的数的和。  示例:  输入: 5 输出: [      [1],     [1,1],    [1,2,1],   [1,3,3,1],  [1,4,6,4,1] ]   来源：力扣（LeetCode） 链接：https://leetcode-cn.com/problems/pascals-triangle 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $targets = [];
        for($i=1;$i<$numRows + 1;$i++){
            $temp = [];
            $targets[] = $this->yanghui1($i, $temp);
        }
        return $targets;
    }
    public function yanghui1($num,&$res){
        if ($num == 1){
            $res = [1];
            return $res;
        }
        $beforeArr = $this->yanghui1($num-1,$res);
        for ($i = 0;$i <$num;$i++){
            $res[$i] = (isset($beforeArr[$i-1]) ?$beforeArr[$i-1] : 0) +(isset($beforeArr[$i]) ?$beforeArr[$i] :0);
        }
        return $res;
    }
}

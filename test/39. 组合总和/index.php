<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2020/10/22
 * Time: 上午11:47
39. 组合总和
给定一个无重复元素的数组 candidates 和一个目标数 target ，找出 candidates 中所有可以使数字和为 target 的组合。

candidates 中的数字可以无限制重复被选取。

说明：

所有数字（包括 target）都是正整数。
解集不能包含重复的组合。
示例 1：

输入：candidates = [2,3,6,7], target = 7,
所求解集为：
[
[7],
[2,2,3]
]
示例 2：

输入：candidates = [2,3,5], target = 8,
所求解集为：
[
[2,2,2,2],
[2,3,3],
[3,5]
]


提示：

1 <= candidates.length <= 30
1 <= candidates[i] <= 200
candidate 中的每个元素都是独一无二的。
1 <= target <= 500

 */
class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    public $res = [];
    function combinationSum($candidates, $target) {
        if ($target <= 0) return [];
        sort($candidates);
        $this->cs($candidates,$target,[],0);
        return $this->res;
    }

    public function cs($nums,$target,$list,$start){
        if ($target <0 ) return ;
        if ($target == 0){
            $this->res[] = $list;
            return;
        }
        for ($i = $start;$i <count($nums);$i++){
            if ($target - $nums[$i] <0)break;
            $list[] = $nums[$i];
            $this->cs($nums,$target - $nums[$i],$list,$i);
            array_pop($list);
        }
    }
}

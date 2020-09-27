<?php
/**
实现一个算法，确定一个字符串 s 的所有字符是否全都不同。

示例 1：

输入: s = "leetcode"
输出: false
示例 2：

输入: s = "abc"
输出: true
限制：

0 <= len(s) <= 100
如果你不使用额外的数据结构，会很加分。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/is-unique-lcci
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution {

    /**
     * @param String $astr
     * @return Boolean
     */
    function isUnique($astr) {
        $hash = [];
        for($i = 0,$length = strlen($astr);$i <$length;$i++){
            if (isset($hash[$astr[$i]])){
                return false;
            }
            $hash[$astr[$i]] ='';
        }
        return true;
    }
}

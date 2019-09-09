<?php

// 常用字符串函数

// 1. 检测字符串长度的函数
/*
$str = "Hello";
echo '$str = "Hello";<br/>';
echo "Hello 字符串长度为：" . strlen($str) . "<br/>";

echo "<br/>";

$str = "你好";
echo "\$str = \"你好\"<br/>";
echo "strlen(\$str) 字符串长度：" . strlen($str) . "<br/>";
echo "mb_strlen(\$str) 字符串长度：" . mb_strlen($str) . "<br/>";

echo "<br/>";
*/

/**
 * 2. 获取字符串出现的位置
 *
 * strpos(string $haystack, mixed $needle[, int $offset = 0]) : int
 * 返回 needle 出现在 haystack 中首次出现的位置
 *
 * stripos 和 strpos 的功能差不多，只是 stripos 不区分大小写
 *
 * 参数：
 *  string $haystack 要被搜索的字符串
 *  mixed $needle    需要检索的字符串
 *  int $offset      检索开始的位置
 *
 * $str = "Hello";
 * strpos($str, 'l') // l 是出现在 Hello 中的第 2 个字符，因为字符索引都是从0开始的;
 */

/**
 * 3. 获取字符串最后一次出现的位置
 *
 * strrpos(string $haystack, mixed $needle[,int $offset = 0]) : int
 * 返回 needle 出现在 haystack 中最后一次出现的位置
 *
 * strripos 和 strrpos 的功能差不多，只是 strripos 不区分大小写
 *
 * 参数：
 *  string $haystack 要被搜索的字符串
 *  mixed $needle    需要检索的字符串
 *  int $offset      检索开始的位置
 *
 * $str = "Hello";
 * strrpos($str, 'l') // l 是出现在 Hello 中的第 3 个字符，因为字符索引都是从0开始的;
 */

/**
 * =====================================================================================================================
 * 4. 字符串裁剪
 *
 * substr ( string $string , int $start [, int $length ] ) : string
 * 返回字符串 string 由 start 开始，length长度个字符串
 *
 * 参数：
 *  string $string 要被裁剪的字符串
 *  int $start     开始位置
 *  int $length    字符串长度
 *
 * $test = substr("abcdef", 0, 3); // abc
 * $test = substr("abcdef", 2, 3); // cde
 * $test = substr("abcdef", 0, -1); // abcde
 */

/**
 * =====================================================================================================================
 * 5. 返回首次字符出现位置 到 字符串结尾的所有字符串
 *
 * strstr ( string $haystack , mixed $needle [, bool $before_needle = FALSE ] ) : string
 * 返回首次字符出现位置 到 字符串结尾的所有字符串
 *
 * stristr 和 strstr 功能差不多，只是不区分大小写
 *
 * 参数：
 *  string $haystack    输入字符串
 *  mixed $needle
 *  bool $before_needle 设置为 true 返回 首次字符出现 到 字符串开头的字符串
 *
 * $str = "alexskywin@163.com";
 * strstr($str, '@') . PHP_EOL; // @163.com
 * strstr($str, '@', true) . PHP_EOL; // alexskywin
 */

/**
 * =====================================================================================================================
 * 6. 字符串替换
 * str_replace( mixed $search, mixed $replace, mixed $subject[, int &$count] ) : mixed
 * 从 $subject 中把搜索到的 $search 替换成为 $replace
 *
 * 参数：
 *  mixed $search 要求被搜索的字符串
 */

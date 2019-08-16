<?php
declare(strict_types=1);

/**
 * 大小写问题
 * - 类名、方法名、函数名：不区分大小写
 * - 变量名、常量名、元素下标：区分大小写
 */
class Student
{
    private $_name;

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        echo $this->_name . PHP_EOL;
    }
}

$student01 = new Student("李铭");
$student02 = new student("刘楠");

$student01->getName();
$student02->getname();

//  类名、方法名、函数名：不区分大小写，但是我们建议还是保持声明时的样式。方便我们的代码阅读。

// ====================================================================================================================
$test01 = '123';
$Test01 = '123';

$arr1 = [1, 2, 3, 4, 5];
$arr2 = $arr1;

$arr2[0] = 9;
print_r($arr1);
print_r($arr2);



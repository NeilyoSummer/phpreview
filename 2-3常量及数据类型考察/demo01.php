<?php
// Heredoc
$name = "SuperMan";
$str = <<<EOT
你好！我是{$name}。
EOT;

echo $str . PHP_EOL; // 输出：你好！我是SuperMan。

// Newdoc
$str = <<<'EoT'
你好！我是{$name}。
EoT;

echo $str . PHP_EOL; // 输出：你好！我是{$name}。
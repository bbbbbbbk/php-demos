<?php
require_once "check.php";
//使用反射获取check文件当中Foo类的源代码
class ReflectionUtil{
    public static function getClassSource(ReflectionClass $class){
        $path = $class->getFileName();
        $lines = @file($path);
        $from = $class->getStartLine();
        $to = $class->getEndLine();
        $len = $to - $from + 1;
        return implode(array_slice($lines, $from - 1, $len));
    }
}
print ReflectionUtil::getClassSource(new ReflectionClass('Foo'));
/**
class Foo{

    private $a;
    private $b;
    public $c;
    public static $d;

    public function __construct()
    {

    }

    private function __clone()
    {

    }

    public function bar()
    {
        return $this->$a;
    }

    private function run()
    {

    }
}
**/
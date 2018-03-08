<?php
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

//反射接口当中检测类的类型的函数
function classData(ReflectionClass $class)
{
    $details = "";
    $name = $class->getName();  
    if($class->isUserDefined()){
        $details .= "$name is user defined\n";
    }
    if($class->isInternal()){
        $details .= "$name is built-in\n";
    }
    if($class->isInterface()){
        $details .= "$name is interface\n";
    }
    if($class->isAbstract()){
        $details .= "$name is an abstract class\n";
    }
    if($class->isFinal()){
        $details .= "$name is a final class\n";
    }
    if($class->isInstantiable()){
        $details .= "$name can be instantiated\n";
    }else{
        $details .= "$name can not be instantiated\n";
    }
    return $details;
}
$foo_class = new ReflectionClass('Foo');
print classData($foo_class);
/**
Foo is user defined
Foo can be instantiated
**/
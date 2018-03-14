<?php
class Demo{
    function foo(array $a, $b = '5',$c){
        //一些操作
    }
}
//使用反射检查方法参数
function argData( ReflectionParameter $arg)
{
    $details = "";
    $declaringclass = $arg->getDeclaringClass();
    $name = $arg->getName();
    $class = $arg->getClass();
    $position = $arg->getPosition();
    $details .= "\$$name has position $position \n";
    if(!empty($class)){
        $classname = $class->getName();
        $details .= "\$$name must be a $classname object \n";
    }

    if($arg->isPassedByReference()){
        $details .= "\$$name is passed by reference \n";
    }

    if($arg->isDefaultValueAvailable()){
        $def = $arg->getDefaultValue();
        $details .= "\$$name has default value: $def \n";
    }
    return $details;
}

$class = new ReflectionClass('Demo');
$method = $class->getMethod('foo');
$params = $method->getParameters();
foreach ($params as $param) {
    print argData($param);
}

/**
$a has position 0 
$b has position 1 
$b has default value: 5 
$c has position 2 
**/
<?php
require_once "check.php";

//通过反射检查方法
function methodData(ReflectionMethod $method){
    $details = "";
    $name = $method->getName();
    if($method->isUserDefined()){
        $details .= "$name is user defined\n";
    }
    if($method->isInternal()){
        $details .= "$name is built-in\n";
    }
    if($method->isAbstract()){
        $details .= "$name is abstract\n";
    }
    if($method->isPublic()){
        $details .= "$name is public\n";
    }
    if($method->isProtected()){
        $details .= "$name is protected\n";
    }
    if($method->isStatic()){
        $details .= "$name is static\n";
    }
    if($method->isPrivate()){
        $details .= "$name is private\n";
    }
    if($method->isFinal()){
        $details .= "$name is final\n";
    }
    if($method->isConstructor()){
        $details .= "$name is constructor\n";
    }
    return $details;
}

$foo_class = new ReflectionClass('Foo');
$methods = $foo_class->getMethods();

foreach($methods as $method){
    print methodData($method);
    print "\n----\n";
}
/**
__construct is user defined
__construct is public
__construct is constructor

----
__clone is user defined
__clone is private

----
bar is user defined
bar is public

----
run is user defined
run is private

----
**/
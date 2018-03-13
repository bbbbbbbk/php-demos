<?php

/**
 * 展示反射API的使用
 */

class Person{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
}

interface Module{
    function execute();
}

class FtpModule implements Module{
    public function setHost($host){
        print "FtpModule::setHost():$host\n";
    }

    public function setUser($user){
        print "FtpModule::setUser():$user\n";
    }

    public function execute()
    {
        //执行操作
    }
}

class PersonModule implements Module{
    public function setPerson(Person $person){
        print "PersonModule::setPerson():{$person->name}\n";
    }

    public function execute()
    {
        //执行操作
    }
}

class ModuleRunner{
    private $configData = [
        "PersonModule" => [
            "person" => "Bob"
        ],
        "FtpModule" => [
            "host" => "example.com",
            "user" => "anon"
        ]
    ];

    private $modules = [];

    function init()
    {
        $interface = new ReflectionClass('Module');
        foreach ($this->configData as $module_name => $params){
            $module_class = new ReflectionClass($module_name);
            if(!$module_class->isSubclassOf($interface)){
                throw new Exception("unknown module type: $module_name");
            }
            $module = $module_class->newInstance();
            foreach ($module_class->getMethods() as $method){
                $this->handleMethod($module, $method, $params);
            }
            array_push($this->modules, $module);
        }
    }

    function handleMethod(Module $module, ReflectionMethod $method, $params)
    {
        $name = $method->getName();
        $args = $method->getParameters();

        if(count($args) != 1 || substr($name, 0 , 3) != "set"){
            return false;
        }

        $property = strtolower(substr($name, 3));
        if(!isset($params[$property])){
            return false;
        }

        $arg_class = $args[0]->getClass();

        if(empty($arg_class)){
            $method->invoke($module, $params[$property]);
        }else{
            $method->invoke($module. $arg_class->newInstance($params[$property]));
        }
    }
}

$test = new ModuleRunner();
$test->init();

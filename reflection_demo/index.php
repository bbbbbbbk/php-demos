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
}

$foo_class = new ReflectionClass('Foo');
//调用Reflection::export()函数直接输出类摘要
Reflection::export($foo_class);

/**
Class [ <user> class Foo ] {
  @@ demos\reflection_demo\index.php 2-23

  - Constants [0] {
  }

  - Static properties [1] {
    Property [ public static $d ]
  }

  - Static methods [0] {
  }

  - Properties [3] {
    Property [ <default> private $a ]
    Property [ <default> private $b ]
    Property [ <default> public $c ]
  }

  - Methods [3] {
    Method [ <user, ctor> public method __construct ] {
      @@ demos\reflection_demo\index.php 9 - 12
    }

    Method [ <user> private method __clone ] {
      @@ demos\reflection_demo\index.php 14 - 17
    }

    Method [ <user> public method bar ] {
      @@ demos\reflection_demo\index.php 19 - 22
    }
  }
}
**/
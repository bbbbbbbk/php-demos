<?php 
abstract class Lesson{

    private $duration;
    private $costStrategy;

    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    public function getDuration()
    {
        return $this->duration;
    }

    // ... more methods

}

abstract class CostStrategy
{

    public abstract function cost(Lesson $lesson);

    public abstract function chargeType();
}

class TimeCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return ($lesson->getDuration() * 5);
    }

    public function chargeType()
    {
        return "hourly rate";
    }
}

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return 30;
    }

    public function chargeType()
    {
        return "fixed rate";
    }

}

class Lecture extends Lesson
{
    // ... Lecture 的特定实现
}

class Seminar extends Lesson
{
    // ... Seminar 的特定实现
}

$lessons[] = new Seminar(4, new TimeCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach ($lessons as $lesson){
    print "Lesson charge {$lesson->cost()}. ";
    print "Charge Type: {$lesson->chargeType()}\n";
}

/**
Lesson charge 20. Charge Type: hourly rate
Lesson charge 30. Charge Type: fixed rate
**/

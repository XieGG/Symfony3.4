<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
class Task{
    /**
     * @Assert\NotBlank()
     */
    public $task;
    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     */
    protected $dueBate;

    public function getTask(){
        return $this->task;
    }

    public function setTask($task){
        $this->task=$task;
    }

    public function getDueDate(){
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate=null){
        $this->dueDate=$dueDate;
    }
}
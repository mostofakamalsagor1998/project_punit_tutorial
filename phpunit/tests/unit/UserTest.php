<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

    protected $user;

    public function testSavings()
    {
        // Here $this keyword refers to the current object, and is only available inside methods.

        $this->user = new \App\Models\User;

        // Here we have passed the income and expense values via the reference object to the setIncomeExpense method.
        $this->user->setIncomeExpense(10000,4975.75);

        // Here we have matched the desired result from the getSavings mwthod using the refence object with the passed savings value, 
        // which is 5024.25.
        $this->assertEquals($this->user->getSavings(),5024.25);


    }
    
}
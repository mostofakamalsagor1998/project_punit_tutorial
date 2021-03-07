<?php

namespace App\Models;

class User
{
    public $monthly_income;

    public $monthly_expense;

    public $monthly_savings;

    public function setIncomeExpense($income,$expense)
    {
        $this->monthly_income = $income;
        
        $this->monthly_expense = $expense;
    }

    public function getSavings()
    {
        $this->monthly_savings = $this->monthly_income-$this->monthly_expense;

        return $this->monthly_savings;
    }

}
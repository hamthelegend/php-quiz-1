<?php

    const WORKING_MONTHS = 12;
    const WORKING_DAYS = 24;
    const WORKING_HOURS = 8;

    abstract class Salary {
        protected $name;
        protected $salary;
        protected $monthsOfStay;

        public function __construct($name, $salary, $monthsOfStay) {
            $this->name = $name;
            $this->salary = round($salary, 2);
            $this->monthsOfStay = $monthsOfStay;
        }

        public function getName() {
            return $this->name;
        }
        public function getSalary() {
            return $this->salary;
        }
        public function getMonthsOfStay() {
            return $this->monthsOfStay;
        }



        abstract public function getThirteenthMonthPay();
        abstract public function getHourlyRate();

    }

    class Employee extends Salary {
        public function getThirteenthMonthPay() {
            return round($this->salary * $this->monthsOfStay / WORKING_MONTHS, 2);
        }

        public function getHourlyRate() {
            return round($this->salary / WORKING_DAYS / WORKING_HOURS, 2);
        }
    }

    class Manager extends Employee {

        public function getThirteenthMonthPay() {
            return 0;
        }

    }
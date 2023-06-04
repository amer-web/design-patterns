<?php


namespace App\Structural\Bridge;


class GradeTwo extends GradeReport
{
    public function showReport()
    {
        return $this->getReport()->showGradeTwoReport();
    }
}
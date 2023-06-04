<?php


namespace App\Structural\Bridge;


class GradeOne extends GradeReport
{
    public function showReport()
    {
        if ($this->getReport())
            return $this->getReport()->showGradeOneReport();
//        throw new  \Exception('OOPS');
        trigger_error('oops');
    }
}
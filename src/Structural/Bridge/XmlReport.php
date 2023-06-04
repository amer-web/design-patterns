<?php


namespace App\Structural\Bridge;


class XmlReport implements ReportInterface
{

    public function showGradeOneReport()
    {
        return "xml report for grade one";
    }

    public function showGradeTwoReport()
    {
        return "xml report for grade two";
    }
}
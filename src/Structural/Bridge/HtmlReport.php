<?php


namespace App\Structural\Bridge;


class HtmlReport implements ReportInterface
{

    public function showGradeOneReport()
    {
        return "html report for grade one";
    }

    public function showGradeTwoReport()
    {
        return "html report for grade two";
    }
}
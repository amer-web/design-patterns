<?php


namespace App\Structural\Bridge;


abstract class GradeReport
{
    private ?ReportInterface $report;

    /**
     * this class links Grade Abstraction with the Report implementation.
     * GradeReport constructor.
     * @param ReportInterface $report
     */
    public function __construct(ReportInterface $report = null)
    {
        $this->report = $report;
    }

    /**
     * @return ReportInterface
     */
    public function getReport(): ?ReportInterface
    {
        return $this->report;
    }

    /**
     * @param ReportInterface $report
     */
    public function setReport(ReportInterface $report): void
    {
        $this->report = $report;
    }

}
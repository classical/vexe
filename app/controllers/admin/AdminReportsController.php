<?php

class AdminReportsController extends AdminController {


    /**
     * Report Model
     * @var Report
     */
    protected $report;

    /**
     * Inject the models.
     * @param Report $report
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show a list of all the reports.
     *
     * @return View
     */
    public function getIndex()
    {
        // Title
        $title = Lang::get("Report Manager");

        // Show the page
        return View::make('admin/reports/index', compact('title'));
    }

}
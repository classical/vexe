<?php

class AdminManagersController extends AdminController
{

    /**
     * Manager Model
     * @var Manager
     */
    protected $manager;

    /**
     * Inject the models.
     * @param Comment $comment
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show a list of all the comment posts.
     *
     * @return View
     */
    public function getIndex()
    {
        // Title
        $title = Lang::get('Management');

        // Show the page
        return View::make('admin/managers/index', compact('title'));
    }

}

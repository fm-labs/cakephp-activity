<?php
namespace Activity\Controller\Admin;

/**
 * Activities Controller
 *
 * @property \Activity\Model\Table\ActivitiesTable $Activities
 */
class ActivitiesController extends AppController
{
    public $actions = [
        'index' => 'Backend.Index'
    ];
}

<?php
namespace bundles\admin\Controllers;

/**
 * Admin bundle EntitiesController
 *
 * @author info
 */
class BackupController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $this->oView->render($this->aView, 'backup/index.tpl');
    }
}
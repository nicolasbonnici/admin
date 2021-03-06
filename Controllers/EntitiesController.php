<?php
namespace bundles\admin\Controllers;

/**
 * Admin bundle EntitiesController
 *
 * @author info
 */
class EntitiesController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $this->aView['aEntities'] = \Library\Core\App::buildEntities();
        $this->oView->render($this->aView, 'entities/index.tpl');
    }
}
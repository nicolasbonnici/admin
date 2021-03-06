<?php
namespace bundles\admin\Controllers;

/**
 * Admin bundle BundlesController
 *
 * @author info
 */
class BundlesController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $oBundles = new \Library\Core\Bundles();
        $this->aView['aBundles'] = $oBundles->get();
        $this->oView->render($this->aView, 'bundles/index.tpl');
    }

    public function clearCacheAction()
    {
        die(var_dump(\Library\Core\App::clearCache()));
    }
}
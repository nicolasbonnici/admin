<?php
namespace bundles\admin\Controllers;

/**
 * Admin bundle HomeController
 *
 * @author info
 */
class HomeController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $this->aView['core_version'] = \Library\Core\App::APP_VERSION;
        $this->aView['core_release_name'] = \Library\Core\App::APP_RELEASE_NAME;
        $this->aView['php_version'] = \Library\Core\App::getPhpVersion();

        /* entities */
        $this->aView['aEntities'] = \Library\Core\App::buildEntities();
        $this->aView['iEntitiesCount'] = count($this->aView['aEntities']);

        /* bundles */
        $this->aView['aBundles'] = \Library\Core\App::getBundles();
        $this->aView['iBundlesCount'] = count($this->aView['aBundles']);

        $this->oView->render($this->aView, 'home/index.tpl');
    }
}
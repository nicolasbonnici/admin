<?php
namespace bundles\admin\Controllers;

use app\Entities\Todo;
/**
 * Admin bundle AclController
 *
 * @author info
 */
class AclController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        // @todo register them
        $aSociableUxJsLibs = array(
            '/lib/js/jquery-1.11.js',
            '/lib/plugins/layout/js/jquery.layout.min.js',
            '/lib/plugins/bootstrap3/js/bootstrap.js',
            '/lib/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
            '/lib/plugins/pnotify/js/jquery.pnotify.js',
            '/lib/sociableUx/js/ux.core.js',
            '/lib/sociableUx/js/charts.core.js',
            '/lib/sociableUx/js/core.js'
        );
        $aSociableUxCssLibs = array(
            '/lib/sociableUx/css/core.classes.css',
            '/lib/sociableUx/css/core.ui.css'
        );

    }
}
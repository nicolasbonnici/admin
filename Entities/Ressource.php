<?php

namespace bundles\admin\Entities;

/**
 * ACL's Ressource
 *
 * @author infradmin
 */
class Ressource extends \Library\Core\Entity {

	const ENTITY = 'Ressource';
    const TABLE_NAME = 'ressource';
    const PRIMARY_KEY = 'idressource';

    /**
     * Object caching duration in seconds
     * @var integer
     */
    protected $iCacheDuration = 120;

    protected $aLinkedEntities;

}

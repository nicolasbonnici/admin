<?php

namespace bundles\admin\Entities;

/**
 *  ACL's permission
 *
 * @author infradmin
 */
class Permission extends \Library\Core\Entity {

    const ENTITY = 'Permission';
    const TABLE_NAME = 'permission';
    const PRIMARY_KEY = 'idpermission';

    /**
     * Object caching duration in seconds
     * @var integer
     */
    protected $iCacheDuration = 60;

    /**
     * Pas encore gérer à ce niveau uniquement au niveau des ACL pour le moment
     * @var unknown
     */
    protected $aLinkedEntities = array(
        'role' => array(
            'loadByDefault' => false,
            'relationship' => 'oneToOne', // @see oneToOne|manyToOne|manyToMany
    		'entity' => 'Role',
    		'mappedByField' => 'role_idrole'
        ),
        'ressource' => array(
            'loadByDefault' => false,
            'relationship' => 'oneToOne', // @see oneToOne|manyToOne|manyToMany
    		'entity' => 'Ressource',
    		'mappedByField' => 'ressource_idressource'
        )
    );

}

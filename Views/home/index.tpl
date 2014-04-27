{% extends 'layout.tpl' %} 
{% block meta_title %}Admin bundle{% endblock meta_title %} 
{% block meta_description %}{% endblock meta_description %} 

{% block js %}
<script type="text/javascript" src="/lib/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script>
{% endblock %} 

{% block css %}
<link href="/lib/plugins/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
{% endblock %} 

{% block main %}
<div class="container-fluid">
    <div class="col-md-10 col-md-offset-1 transparentBlackBg rounded well ui-shadow">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Admin dashboard <small>configure your installation</small>
                </h1>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">
                    <div class="col-md-3 column">
                        <div class="list-group">
                            <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-dashboard"></span>
                                Tableau de bord</a>
                            <div class="list-group-item">
                                <p class="list-group-item-text">
                                    <a href="#" class="ui-sendxhr" data-url="/admin/users"
                                        data-selector="#setupMain" title="{{tr['users_managment_tip']}}"
                                        data-placement="right"> <span class="glyphicon glyphicon-user"></span>
                                        {{tr['users_managment']}}
                                    </a>
                                </p>
                            </div>
                            <div class="list-group-item">
                                <p class="list-group-item-text">
                                    <a href="#" class="ui-sendxhr" data-url="/admin/bundles"
                                        data-selector="#setupMain" title="Gestion des bundles"
                                        data-placement="right"> <span class="glyphicon glyphicon-cloud-download"></span>
                                        Gestion des bundles
                                    </a>
                                    <span class="pull-right badge">{% if iBundlesCount|Exists %}{{iBundlesCount}}{% endif %}</span>
                                </p>
                            </div>
                            <div class="list-group-item">
                                <p class="list-group-item-text">
                                    <a href="#" class="ui-sendxhr" data-url="/admin/entities"
                                        data-selector="#setupMain" title="{{tr['entities_managment_tip']}}"
                                        data-placement="right"> <span class="glyphicon glyphicon-hdd"></span>
                                        {{tr['entities_managment']}}
                                    </a>
                                    <span class="pull-right badge">{% if iEntitiesCount|Exists %}{{iEntitiesCount}}{% endif %}</span>
                                </p>
                            </div>
                            <div class="list-group-item">
                                <p class="list-group-item-text">
                                    <a href="#" class="ui-sendxhr" data-url="/admin/acl" data-selector="#setupMain"
                                        title="{{tr['acl_managment_tip']}}" data-placement="right"> <span
                                        class="glyphicon glyphicon-lock"></span> {{tr['acl_managment']}}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="setupMain" class="col-md-9 column">
                        <h1>Serveur</h1>
                        <h3>PHP</h3>
                        <p>
                            This server run PHP version <strong>{{php_version}}</strong>
                        </p>
                        <h3>Framework</h3>
                        <p>
                            sociableCore framework version <strong>{{core_version}}</strong> release name <strong>{{core_release_name}}</strong>
                        </p>
                        <p>
                            Le mode debug est actuellement <strong>{% if sEnv === 'dev'%}activé{% else
                                %}désactivé{% endif %}</strong> sur cet environnement
                        </p>
                        <p>
                            @todo Faire des outils d'administration (wizard install, update, scaffold des bundles et clear cache)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

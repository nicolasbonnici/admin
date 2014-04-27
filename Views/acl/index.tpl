{% if oGroups|Exists && oRessources|Exists %} 
    <table class="table">
        <thead>
            <tr>
                <th>
                    Ressources
                </th> 
        {% for oGroup in oGroups %}
                <th>
                    {{oGroup.name}}
                </th> 
        {% endfor %}
            </tr>
        </thead>
        <tbody>
        {% for oRessource in oRessources %}
            <tr>
                <td>
                    {{oRessource.name}}
                </td> 
        {% for oGroup in oGroups %}
                <td>
                {% for oPermission in oRessource.oPermissionsCollection %}
                    {% if oPermission.group_idgroup === oGroup.idgroup && oPermission.ressource_idressource === oRessource.idressource %}
                        {{oPermission}}
                    {% endif %}
                {% endfor %}
                </td> 
        {% endfor %}
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endif %}
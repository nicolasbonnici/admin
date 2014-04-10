{% if oGroups|Exists && oRessources|Exists %} 
    <table class="table">
        <thead>
            <tr>
                <th>
                    Ressources
                </th> 
        {% for oRessource in oRessources %}
                <th>
                    {{oRessource.name}}
                </th> 
        {% endfor %}
            </tr>
        </thead>
        <tbody>
        {% for oGroup in oGroups %}
            <tr>
                <td>
                    {{oGroup.name}}
                </td> 
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endif %}
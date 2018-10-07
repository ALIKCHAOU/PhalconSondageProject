<h1>{{polls.question}}</h1>
<table border="1">
        <tr>
                <th>name</th>
                <th>number_votes</th>
                <th>voter</th>
              </tr>
    {% for op  in option %}
 <tr> 
    <td>{{op.name}}</td>   
    <td>{{op.number_votes}}</td>
    <td>{{ Link_to('/poll/vote/'~op.id,'vote')}}</td>
   
</tr> 
{% endfor %} 
</table>
<p>{{ Link_to('/poll/','GO Back')}}</p>
<p>{{ Link_to('/poll/add/'~polls.ID,'add')}}</p>
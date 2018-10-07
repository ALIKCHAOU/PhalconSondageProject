<h1>congratuation<h1>


 <ul>
{% for poll  in varable %}
<li>{{ link_to('/poll/show/'~poll.ID,poll.question)}}</li>

{% endfor %} 
</ul> 
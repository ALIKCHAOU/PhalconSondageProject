<h1>Add option </h1>
<form method="post">
<p>Name{{text_field('name')}}</p>
<p>    {{ submit_button('Save')   }}</p>
<p>{{ Link_to('/poll','Cansel')}}</p>

</form>
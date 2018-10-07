<h1>congratuation<h1>


 <ul>
<?php foreach ($varable as $poll) { ?>
<li><?= $this->tag->linkTo(['/poll/show/' . $poll->ID, $poll->question]) ?></li>

<?php } ?> 
</ul> 
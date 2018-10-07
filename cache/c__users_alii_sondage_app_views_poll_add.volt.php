<h1>Add option </h1>
<form method="post">
<p>Name<?= $this->tag->textField(['name']) ?></p>
<p>    <?= $this->tag->submitButton(['Save']) ?></p>
<p><?= $this->tag->linkTo('/poll', 'Cansel') ?></p>

</form>
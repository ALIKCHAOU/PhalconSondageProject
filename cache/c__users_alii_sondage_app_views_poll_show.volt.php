<h1><?= $polls->question ?></h1>
<table border="1">
        <tr>
                <th>name</th>
                <th>number_votes</th>
                <th>voter</th>
              </tr>
    <?php foreach ($option as $op) { ?>
 <tr> 
    <td><?= $op->name ?></td>   
    <td><?= $op->number_votes ?></td>
    <td><?= $this->tag->linkTo('/poll/vote/' . $op->id, 'vote') ?></td>
   
</tr> 
<?php } ?> 
</table>
<p><?= $this->tag->linkTo('/poll/', 'GO Back') ?></p>
<p><?= $this->tag->linkTo('/poll/add/' . $polls->ID, 'add') ?></p>
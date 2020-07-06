<?php
     if(!empty($info)) :
?>
<ul>
    <?php foreach ($info as $val): ?>
    <li style="list-style: none;text-align: center;color: #1e7e34;"><?php echo $val; ?></li>
     <?php endforeach; ?>
</ul>
<?php  else : ?>
<h5 style="text-align: center;color: red">Not found</h5>
<?php endif; ?>

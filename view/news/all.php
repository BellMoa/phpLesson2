<?php foreach ($items as $item): ?>
    <h1><?php echo $item->title?></h1>
    <div><?php echo $item->text?>
        <?php echo $item->date ?>
    </div>
<?php endforeach; ?>

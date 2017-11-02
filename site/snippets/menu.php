<nav class="nav-main">
    <?php foreach($pages->visible() as $p): ?>
    <a <?php e($p->isOpen(), ' class="active" ') ?>href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    <?php endforeach ?>
</nav>

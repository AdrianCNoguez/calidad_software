<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark $bookmark
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bookmark->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de  Bookmarks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Crear un nuevo Usuario'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookmarks form large-9 medium-8 columns content">
    <?= $this->Form->create($bookmark) ?>
    <fieldset>
        <legend><?= __('Editar un Bookmark') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('url');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modificar')) ?>
    <?= $this->Form->end() ?>
</div>

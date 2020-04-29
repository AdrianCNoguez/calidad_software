<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Temporada $temporada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Temporada'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="temporada form large-9 medium-8 columns content">
    <?= $this->Form->create($temporada) ?>
    <fieldset>
        <legend><?= __('Add Temporada') ?></legend>
        <?php
            echo $this->Form->control('nombreTemporada');
            echo $this->Form->control('ligas_id', ['options' => $ligas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

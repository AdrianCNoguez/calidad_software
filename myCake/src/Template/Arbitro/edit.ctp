<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arbitro $arbitro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arbitro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $arbitro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Arbitro'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arbitro form large-9 medium-8 columns content">
    <?= $this->Form->create($arbitro) ?>
    <fieldset>
        <legend><?= __('Edit Arbitro') ?></legend>
        <?php
            echo $this->Form->control('posicion');
            echo $this->Form->control('partidosJ');
            echo $this->Form->control('ligas_id', ['options' => $ligas]);
            echo $this->Form->control('encuentro_id', ['options' => $encuentro]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

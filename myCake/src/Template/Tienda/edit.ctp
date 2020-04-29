<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tienda $tienda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tienda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tienda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tienda'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estadio'), ['controller' => 'Estadio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estadio'), ['controller' => 'Estadio', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Patrocinador'), ['controller' => 'Patrocinador', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patrocinador'), ['controller' => 'Patrocinador', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tienda form large-9 medium-8 columns content">
    <?= $this->Form->create($tienda) ?>
    <fieldset>
        <legend><?= __('Edit Tienda') ?></legend>
        <?php
            echo $this->Form->control('Nom_tienda');
            echo $this->Form->control('estadio_id', ['options' => $estadio]);
            echo $this->Form->control('patrocinador_id', ['options' => $patrocinador]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

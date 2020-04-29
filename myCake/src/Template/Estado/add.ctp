<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de Estados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Municipios'), ['controller' => 'Municipio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Colonia'), ['controller' => 'Colonia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Añadir un nuevo Municipio'),['controller' => 'Municipio', 'action' => 'add'])?></li>
        <li><?= $this->Html->link(__('Añadir una nueva Colonia'), ['controller' => 'Colonia', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estado form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Añadir un nuevo Estado') ?></legend>
        <?php
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear')) ?>
    <?= $this->Form->end() ?>
</div>

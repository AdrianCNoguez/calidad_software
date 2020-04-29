<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $estado->id],
                ['confirm' => __('¿Estás seguro de que quieres eliminar el Estado? # {0}?', $estado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Estados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Municipios'), ['controller' => 'Municipio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Colonias'), ['controller' => 'Colonia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Editar un Municipio'), ['controller' => 'Municipio', 'action' => 'edit']) ?></li>
    </ul>
</nav>
<div class="estado form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Editar un Estado') ?></legend>
        <?php
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>

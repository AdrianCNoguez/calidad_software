<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadio $estadio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">

        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista Estadio'), ['controller' => 'Estadio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Municipio'), ['controller' => 'Municipio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Colonia'), ['controller' => 'Colonia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Direccion'), ['controller' => 'Direccion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Estadio'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Añadir un nuevo Direccion'), ['controller' => 'Direccion', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estadio form large-9 medium-8 columns content">
    <?= $this->Form->create($estadio) ?>

    <fieldset>
        <legend><?= __('Añadir Estadio') ?></legend>

        <select id="direccion_id" name="direccion_id">

            <option>------Seleccionar------</option>
            <?php foreach( $direccion as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->calle ?></option>
            <?php endforeach; ?>
        </select>

        <?php
            echo $this->Form->control('sede');
            echo $this->Form->control('capacidad');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Añadir')) ?>
    <?= $this->Form->end() ?>
</div>

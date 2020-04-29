<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direccion $direccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>

        <li><?= $this->Html->link(__('Lista de Estado '), ['controller' => 'Estado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Municipio '), ['controller' => 'Municipio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Colonia'), ['controller' => 'Colonia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Direccion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Añadir una nueva Direccion'), ['controller' => 'Direccion', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direccion form large-9 medium-8 columns content">
    <?= $this->Form->create($direccion) ?>
    <fieldset>
        <legend><?= __('Añadir Direccion') ?></legend>


        <select id="colonia_id" name="colonia_id">

            <option>------Seleccionar------</option>
            <?php foreach( $colonia as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->colonia ?></option>
            <?php endforeach; ?>
        </select>

        <?php
            echo $this->Form->control('calle');
            echo $this->Form->control('No');
            echo $this->Form->control('Cp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Añadir')) ?>
    <?= $this->Form->end() ?>
</div>

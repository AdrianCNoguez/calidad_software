<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipio $municipio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de Estados'), ['controller' => 'Estado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Municipios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Colonias'), ['controller' => 'Colonia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Añadir un nuevo Estado'), ['controller' => 'Estado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Añadir una nueva Colonia'), ['controller' => 'Colonia', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="municipio form large-9 medium-8 columns content">
    <?= $this->Form->create($municipio) ?>
    <fieldset>
        <legend><?= __('Añadir Municipio') ?></legend>

        <select id="estado_id" name="estado_id">

            <option>------Seleccionar------</option>
            <?php foreach( $estado as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->estado ?></option>
            <?php endforeach; ?>
        </select>
        <?php
        echo $this->Form->control('municipio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear')) ?>
    <?= $this->Form->end() ?>
</div>

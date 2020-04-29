<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tienda $tienda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Añadir nueva Tienda'), ['controller' => 'Tienda', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tienda form large-9 medium-8 columns content">
    <?= $this->Form->create($tienda) ?>
    <fieldset>
        <legend><?= __('Add Tienda') ?></legend>
            <select id="estadio_id" name="estadio_id">

            <option>------Seleccionar------</option>
            <?php foreach( $estadio as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->sede ?></option>
            <?php endforeach; ?>
        </select>


        <select id="patrocinador_id" name="patrocinador_id">

            <option>------Seleccionar------</option>
            <?php foreach( $patrocinador as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->patro ?></option>
            <?php endforeach; ?>
        </select>



        <?php
            echo $this->Form->control('Nom_tienda');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

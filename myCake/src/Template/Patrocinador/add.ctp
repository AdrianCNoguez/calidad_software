<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patrocinador $patrocinador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Patrocinador'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estadio'), ['controller' => 'Estadio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estadio'), ['controller' => 'Estadio', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="patrocinador form large-9 medium-8 columns content">
    <?= $this->Form->create($patrocinador) ?>
    <fieldset>
        <legend><?= __('Add Patrocinador') ?></legend>

        <select id="estadio_id" name="estadio_id">

            <option>------Seleccionar------</option>
            <?php foreach( $estadio as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->sede ?></option>
            <?php endforeach; ?>
        </select>

        <?php
            echo $this->Form->control('patro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

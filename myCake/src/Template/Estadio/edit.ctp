<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadio $estadio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estadio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estadio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estadio'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Direccion'), ['controller' => 'Direccion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccion', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estadio form large-9 medium-8 columns content">
    <?= $this->Form->create($estadio) ?>
    <fieldset>
        <legend><?= __('Editar Estadio') ?></legend>

       <select id="direccion_id" name="direccion">

            <option>------Seleccionar------</option>
            <?php foreach( $direccion as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->calle ?></option>
            <?php endforeach; ?>
        </select>

        <?php
            echo $this->Form->control('sede');
            echo $this->Form->control('capacidad');
        //    echo $this->Form->control('direccion_id', ['options' => $direccion]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

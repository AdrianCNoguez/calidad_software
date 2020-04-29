<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo $equipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estadio'), ['controller' => 'Estadio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estadio'), ['controller' => 'Estadio', 'action' => 'add']) ?></li>
    </ul>
</nav>


<div class="equipo form large-9 medium-8 columns content">
    <?= $this->Form->create($equipo) ?>


    <fieldset>
        <legend><?= __('Editar Equipo') ?></legend>
        <select id="estadio_id" name="estadio_id">

            <option>------Seleccionar------</option>
            <?php foreach( $estadio as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->sede ?></option>
            <?php endforeach; ?>
        </select>
        <?php
            echo $this->Form->control('nomEquipo');
            echo $this->Form->control('Atq');
            echo $this->Form->control('Med');
            echo $this->Form->control('Def');
            echo $this->Form->control('valor');
            echo $this->Form->control('calidad');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>

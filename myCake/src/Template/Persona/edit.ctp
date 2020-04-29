<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $persona->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipo'), ['controller' => 'Equipo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persona form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Edit Persona') ?></legend>
        <select id="equipo_id" name="equipo_id">

            <option>------Seleccionar------</option>
            <?php foreach( $equipo as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->nomEquipo ?></option>
            <?php endforeach; ?>
        </select>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellidoP');
            echo $this->Form->control('apellidoM');
            echo $this->Form->control('edad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

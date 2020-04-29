<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Red $red
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Red'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipo'), ['controller' => 'Equipo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="red form large-9 medium-8 columns content">
    <?= $this->Form->create($red) ?>
    <fieldset>
        <legend><?= __('Add Red') ?></legend>

        <select id="equipo_id" name="equipo_id">

            <option>------Seleccionar------</option>
            <?php foreach( $equipo as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->nomEquipo ?></option>
            <?php endforeach; ?>
        </select>


        <?php
            echo $this->Form->control('Tw');
            echo $this->Form->control('Fb');
            echo $this->Form->control('Insta');
           // echo $this->Form->control('equipo_id', ['options' => $equipo]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Encuentro $encuentro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $encuentro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $encuentro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Encuentro'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipo'), ['controller' => 'Equipo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="encuentro form large-9 medium-8 columns content">
    <?= $this->Form->create($encuentro) ?>
    <fieldset>
        <legend><?= __('Edit Encuentro') ?></legend>
        <select id="equipo_id" name="equipo_id">

            <option>------Seleccionar------</option>
            <?php foreach( $equipo as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->nomEquipo ?></option>
            <?php endforeach; ?>
        </select>

        <?php
            echo $this->Form->control('NombreEcuentro');
            echo $this->Form->control('local');
            echo $this->Form->control('visinte');
            echo $this->Form->control('fecha');
            echo $this->Form->control('hora');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

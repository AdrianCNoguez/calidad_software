<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arbitro $arbitro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Arbitro'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arbitro form large-9 medium-8 columns content">
    <?= $this->Form->create($arbitro) ?>
    <fieldset>
        <legend><?= __('Add Arbitro') ?></legend>
        <select id="persona_id" name="persona_id">

            <option>------Seleccionar------</option>
            <?php foreach( $persona as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->nombre?></option>
            <?php endforeach; ?>
        </select>
        <?php
            echo $this->Form->control('posicion');
            echo $this->Form->control('partidosJ');
            echo $this->Form->control('ligas_id', ['options' => $ligas]);
            echo $this->Form->control('encuentro_id', ['options' => $encuentro]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

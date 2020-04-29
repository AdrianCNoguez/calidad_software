<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $sM
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List S M S'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sMS form large-9 medium-8 columns content">
    <?= $this->Form->create($sM) ?>
    <fieldset>
        <legend><?= __('Add S M') ?></legend>
        <?php
            echo $this->Form->control('telefono');
            echo $this->Form->control('mensaje');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Liga $liga
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $liga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $liga->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ligas form large-9 medium-8 columns content">
    <?= $this->Form->create($liga) ?>
    <fieldset>
        <legend><?= __('Edit Liga') ?></legend>
        <?php
            echo $this->Form->control('nombreLiga');
            echo $this->Form->control('annio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

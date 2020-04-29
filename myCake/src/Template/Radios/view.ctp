<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Radio $radio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Radio'), ['action' => 'edit', $radio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Radio'), ['action' => 'delete', $radio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Radios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Radio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medios'), ['controller' => 'Medios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medio'), ['controller' => 'Medios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="radios view large-9 medium-8 columns content">
    <h3><?= h($radio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Radiodifusora') ?></th>
            <td><?= h($radio->Radiodifusora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medio') ?></th>
            <td><?= $radio->has('medio') ? $this->Html->link($radio->medio->id, ['controller' => 'Medios', 'action' => 'view', $radio->medio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Encuentro') ?></th>
            <td><?= $radio->has('encuentro') ? $this->Html->link($radio->encuentro->id, ['controller' => 'Encuentro', 'action' => 'view', $radio->encuentro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($radio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sintonia') ?></th>
            <td><?= $this->Number->format($radio->sintonia) ?></td>
        </tr>
    </table>
</div>

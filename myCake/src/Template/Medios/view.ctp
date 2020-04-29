<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medio $medio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medio'), ['action' => 'edit', $medio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medio'), ['action' => 'delete', $medio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipo'), ['controller' => 'Equipo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medios view large-9 medium-8 columns content">
    <h3><?= h($medio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($medio->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipo') ?></th>
            <td><?= $medio->has('equipo') ? $this->Html->link($medio->equipo->id, ['controller' => 'Equipo', 'action' => 'view', $medio->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medio->id) ?></td>
        </tr>
    </table>
</div>

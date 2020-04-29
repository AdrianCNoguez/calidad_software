<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Televicione $televicione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Televicione'), ['action' => 'edit', $televicione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Televicione'), ['action' => 'delete', $televicione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $televicione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Televiciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Televicione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medios'), ['controller' => 'Medios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medio'), ['controller' => 'Medios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="televiciones view large-9 medium-8 columns content">
    <h3><?= h($televicione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TvPublic') ?></th>
            <td><?= h($televicione->tvPublic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CanalPublic') ?></th>
            <td><?= h($televicione->canalPublic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TvPriv') ?></th>
            <td><?= h($televicione->tvPriv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CanalPriv') ?></th>
            <td><?= h($televicione->canalPriv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medio') ?></th>
            <td><?= $televicione->has('medio') ? $this->Html->link($televicione->medio->id, ['controller' => 'Medios', 'action' => 'view', $televicione->medio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Encuentro') ?></th>
            <td><?= $televicione->has('encuentro') ? $this->Html->link($televicione->encuentro->id, ['controller' => 'Encuentro', 'action' => 'view', $televicione->encuentro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($televicione->id) ?></td>
        </tr>
    </table>
</div>

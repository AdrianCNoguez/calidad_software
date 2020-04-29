<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arbitro $arbitro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Arbitro'), ['action' => 'edit', $arbitro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Arbitro'), ['action' => 'delete', $arbitro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arbitro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Arbitro'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arbitro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="arbitro view large-9 medium-8 columns content">
    <h3><?= h($arbitro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Posicion') ?></th>
            <td><?= h($arbitro->posicion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PartidosJ') ?></th>
            <td><?= h($arbitro->partidosJ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liga') ?></th>
            <td><?= $arbitro->has('liga') ? $this->Html->link($arbitro->liga->id, ['controller' => 'Ligas', 'action' => 'view', $arbitro->liga->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Encuentro') ?></th>
            <td><?= $arbitro->has('encuentro') ? $this->Html->link($arbitro->encuentro->id, ['controller' => 'Encuentro', 'action' => 'view', $arbitro->encuentro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($arbitro->id) ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patrocinador[]|\Cake\Collection\CollectionInterface $patrocinador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><li><?= $this->Html->link(__('Añadir un nuevo Patrocinador'), ['action' => 'add']) ?></li>
                    </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">

                        </div>
                    </div>
                </div>
            </div>
</nav>

<div class="patrocinador index large-9 medium-8 columns content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Patrocinador</h3>


                <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estadio_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patrocinador as $patrocinador): ?>
            <tr>
                <td><?= $this->Number->format($patrocinador->id) ?></td>
                <td><?= h($patrocinador->patro) ?></td>
                <td><?= $patrocinador->has('estadio') ? $this->Html->link($patrocinador->estadio->id, ['controller' => 'Estadio', 'action' => 'view', $patrocinador->estadio->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $patrocinador->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $patrocinador->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $patrocinador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patrocinador->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

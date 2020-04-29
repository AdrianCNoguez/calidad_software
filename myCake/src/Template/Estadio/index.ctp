<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estadio[]|\Cake\Collection\CollectionInterface $estadio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><li><?= $this->Html->link(__('Añadir un nuevo Estadio'), ['action' => 'add']) ?></li>
                    </h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">

                        </div>
                    </div>
                </div>
            </div>

</nav>

<div class="estadio index large-9 medium-8 columns content">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Estadio</h3>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sede') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capacidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estadio as $estadio): ?>
            <tr>
                <td><?= $this->Number->format($estadio->id) ?></td>
                <td><?= h($estadio->sede) ?></td>
                <td><?= $this->Number->format($estadio->capacidad) ?></td>
                <td><?= $estadio->has('direccion') ? $this->Html->link($estadio->direccion->id, ['controller' => 'Direccion', 'action' => 'view', $estadio->direccion->id]) : '' ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('View'), ['action' => 'view', $estadio->id]) ?></button>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estadio->id]) ?></button>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estadio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadio->id)]) ?></button>



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

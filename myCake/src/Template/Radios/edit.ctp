<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Radio $radio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $radio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $radio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Radios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Medios'), ['controller' => 'Medios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medio'), ['controller' => 'Medios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Encuentro'), ['controller' => 'Encuentro', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentro', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="radios form large-9 medium-8 columns content">
    <?= $this->Form->create($radio) ?>
    <fieldset>
        <legend><?= __('Edit Radio') ?></legend>
        <select id="medio_id" name="medio_id">

            <option>------Seleccionar------</option>
            <?php foreach( $medio as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->tipo ?></option>
            <?php endforeach; ?>
        </select>

        <select id="encuentro_id" name="encuentro_id">

            <option>------Seleccionar------</option>
            <?php foreach( $encuentro as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->NombreEcuentro ?></option>
            <?php endforeach; ?>
        </select>
        <?php
            echo $this->Form->control('Radiodifusora');
            echo $this->Form->control('sintonia');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

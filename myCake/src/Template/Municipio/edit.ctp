<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Municipio $municipio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $municipio->id],
                ['confirm' => __('¿Estás seguro de querer eliminar el municipio?# {0}?', $municipio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Municipios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Estados'), ['controller' => 'Estado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Editar un Estado'), ['controller' => 'Estado', 'action' => 'edit']) ?></li>
    </ul>
</nav>
<div class="municipio form large-9 medium-8 columns content">
    <?= $this->Form->create($municipio) ?>
    <fieldset>
        <legend><?= __('Editar Municipio') ?></legend>

        <select id="estado_id" name="estado_id">
            <option>------Seleccionar------</option>
            <?php foreach( $estado as $key=>$value ): ?>
                <option value="<?php echo $value->id?>"><?php echo $value->estado ?></option>
            <?php endforeach; ?>
        </select>

        <?php
        echo $this->Form->control('municipio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>

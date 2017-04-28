<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Catalogo de servicios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="catalogoservicios form large-9 medium-8 columns content">
    <?= $this->Form->create($catalogoservicio) ?>
    <fieldset>
        <legend><?= __('Añadir un nuevo servicio') ?></legend>
        <?php
            echo $this->Form->control('descripcion del servicio');
            echo $this->Form->control('costo del servicio');
            echo $this->Form->control('Especificaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

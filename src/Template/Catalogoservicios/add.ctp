<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Catalogoservicios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="catalogoservicios form large-9 medium-8 columns content">
    <?= $this->Form->create($catalogoservicio) ?>
    <fieldset>
        <legend><?= __('Add Catalogoservicio') ?></legend>
        <?php
            echo $this->Form->control('descripcionServicio');
            echo $this->Form->control('costoServicio');
            echo $this->Form->control('Especificaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

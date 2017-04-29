<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Listado de codigos postales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="codigopostal form large-9 medium-8 columns content">
    <?= $this->Form->create($codigopostal) ?>
    <fieldset>
        <legend><?= __('Añadir codigo postal') ?></legend>
        <?php
            echo $this->Form->control('ciudad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

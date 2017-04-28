<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Categorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Inventario'), ['controller' => 'Inventario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Añadir item a inventario'), ['controller' => 'Inventario', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoria form large-9 medium-8 columns content">
    <?= $this->Form->create($categorium) ?>
    <fieldset>
        <legend><?= __('Añadir categoria') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventario->idInventario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->idInventario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inventario'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultoriodental'), ['controller' => 'Consultoriodental', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoriodental'), ['controller' => 'Consultoriodental', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventario form large-9 medium-8 columns content">
    <?= $this->Form->create($inventario) ?>
    <fieldset>
        <legend><?= __('Edit Inventario') ?></legend>
        <?php
            echo $this->Form->control('nombreItem');
            echo $this->Form->control('descripcionItem');
            echo $this->Form->control('stock');
            echo $this->Form->control('fechaDeCaducidad', ['empty' => true]);
            echo $this->Form->control('Categoria_idCategoria');
            echo $this->Form->control('ConsultorioDental_idConsultorioDental');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

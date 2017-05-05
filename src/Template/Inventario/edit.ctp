<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $inventario->idInventario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->idInventario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Inventario'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listado de categorias'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva categoria'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de consultorios dentales'), ['controller' => 'Consultoriodental', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo consultorio dental'), ['controller' => 'Consultoriodental', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventario form large-10 medium-8 columns content">
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

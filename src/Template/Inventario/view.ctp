<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inventario'), ['action' => 'edit', $inventario->idInventario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inventario'), ['action' => 'delete', $inventario->idInventario], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->idInventario)]) ?> </li>
        <li><?= $this->Html->link(__('List Inventario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultoriodental'), ['controller' => 'Consultoriodental', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoriodental'), ['controller' => 'Consultoriodental', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inventario view large-9 medium-8 columns content">
    <h3><?= h($inventario->idInventario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreItem') ?></th>
            <td><?= h($inventario->nombreItem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DescripcionItem') ?></th>
            <td><?= h($inventario->descripcionItem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdInventario') ?></th>
            <td><?= $this->Number->format($inventario->idInventario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= $this->Number->format($inventario->stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria IdCategoria') ?></th>
            <td><?= $this->Number->format($inventario->Categoria_idCategoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ConsultorioDental IdConsultorioDental') ?></th>
            <td><?= $this->Number->format($inventario->ConsultorioDental_idConsultorioDental) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaDeCaducidad') ?></th>
            <td><?= h($inventario->fechaDeCaducidad) ?></td>
        </tr>
    </table>
</div>

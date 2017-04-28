<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorium'), ['action' => 'edit', $categorium->idCategoria]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorium'), ['action' => 'delete', $categorium->idCategoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->idCategoria)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inventario'), ['controller' => 'Inventario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventario'), ['controller' => 'Inventario', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoria view large-9 medium-8 columns content">
    <h3><?= h($categorium->idCategoria) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DescripcionCategoria') ?></th>
            <td><?= h($categorium->descripcionCategoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCategoria') ?></th>
            <td><?= $this->Number->format($categorium->idCategoria) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Inventario') ?></h4>
        <?php if (!empty($categorium->inventario)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('IdInventario') ?></th>
                <th scope="col"><?= __('NombreItem') ?></th>
                <th scope="col"><?= __('DescripcionItem') ?></th>
                <th scope="col"><?= __('Stock') ?></th>
                <th scope="col"><?= __('FechaDeCaducidad') ?></th>
                <th scope="col"><?= __('Categoria IdCategoria') ?></th>
                <th scope="col"><?= __('ConsultorioDental IdConsultorioDental') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categorium->inventario as $inventario): ?>
            <tr>
                <td><?= h($inventario->idInventario) ?></td>
                <td><?= h($inventario->nombreItem) ?></td>
                <td><?= h($inventario->descripcionItem) ?></td>
                <td><?= h($inventario->stock) ?></td>
                <td><?= h($inventario->fechaDeCaducidad) ?></td>
                <td><?= h($inventario->Categoria_idCategoria) ?></td>
                <td><?= h($inventario->ConsultorioDental_idConsultorioDental) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Inventario', 'action' => 'view', $inventario->idInventario]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Inventario', 'action' => 'edit', $inventario->idInventario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inventario', 'action' => 'delete', $inventario->idInventario], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->idInventario)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

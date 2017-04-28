<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar categoria'), ['action' => 'edit', $categorium->idCategoria]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar cateogoria'), ['action' => 'delete', $categorium->idCategoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->idCategoria)]) ?> </li>
        <li><?= $this->Html->link(__('Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Inventario'), ['controller' => 'Inventario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Añadir item a Inventario'), ['controller' => 'Inventario', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoria view large-9 medium-8 columns content">
    <h3><?= h($categorium->idCategoria) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categorium->idCategoria) ?></td>
         </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($categorium->descripcionCategoria) ?></td>
        </tr>

    </table>
    <div class="related">
        <h4><?= __(' Inventario relacionado') ?></h4>
        <?php if (!empty($categorium->inventario)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripcion del item') ?></th>
                <th scope="col"><?= __('Stock') ?></th>
                <th scope="col"><?= __('Fecha de caducidad') ?></th>
                <th scope="col"><?= __('Id de categoria') ?></th>
                <th scope="col"><?= __('Id de consultorioDental') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
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
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Inventario', 'action' => 'view', $inventario->idInventario]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Inventario', 'action' => 'edit', $inventario->idInventario]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['controller' => 'Inventario', 'action' => 'delete', $inventario->idInventario], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->idInventario)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

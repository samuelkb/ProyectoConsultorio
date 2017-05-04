<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar consultorio dental'), ['action' => 'edit', $consultoriodental->idConsultorioDental]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar consultorio dental'), ['action' => 'delete', $consultoriodental->idConsultorioDental], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoriodental->idConsultorioDental)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de consultorios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo consultorio dental'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de inventario'), ['controller' => 'Inventario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo item de inventario'), ['controller' => 'Inventario', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoriodental view large-9 medium-8 columns content">
    <h3><?= h($consultoriodental->idConsultorioDental) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($consultoriodental->nombreConsultorio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoriodental->idConsultorioDental) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de direccion') ?></th>
            <td><?= $this->Number->format($consultoriodental->Direccion_idDireccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de contacto') ?></th>
            <td><?= $this->Number->format($consultoriodental->Contacto_idContacto) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Inventario') ?></h4>
        <?php if (!empty($consultoriodental->inventario)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('IdInventario') ?></th>
                <th scope="col"><?= __('NombreItem') ?></th>
                <th scope="col"><?= __('DescripcionItem') ?></th>
                <th scope="col"><?= __('Stock') ?></th>
                <th scope="col"><?= __('FechaDeCaducidad') ?></th>
                <th scope="col"><?= __('Categoria IdCategoria') ?></th>
                <th scope="col"><?= __('ConsultorioDental IdConsultorioDental') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php foreach ($consultoriodental->inventario as $inventario): ?>
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

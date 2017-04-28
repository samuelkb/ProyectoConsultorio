<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Catalogoservicio'), ['action' => 'edit', $catalogoservicio->idCatalogoServicios]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Catalogoservicio'), ['action' => 'delete', $catalogoservicio->idCatalogoServicios], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogoservicio->idCatalogoServicios)]) ?> </li>
        <li><?= $this->Html->link(__('List Catalogoservicios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catalogoservicio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="catalogoservicios view large-9 medium-8 columns content">
    <h3><?= h($catalogoservicio->idCatalogoServicios) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DescripcionServicio') ?></th>
            <td><?= h($catalogoservicio->descripcionServicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Especificaciones') ?></th>
            <td><?= h($catalogoservicio->Especificaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCatalogoServicios') ?></th>
            <td><?= $this->Number->format($catalogoservicio->idCatalogoServicios) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CostoServicio') ?></th>
            <td><?= $this->Number->format($catalogoservicio->costoServicio) ?></td>
        </tr>
    </table>
</div>

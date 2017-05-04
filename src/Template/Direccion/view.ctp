<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar direccion'), ['action' => 'edit', $direccion->idDireccion]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar direccion'), ['action' => 'delete', $direccion->idDireccion], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->idDireccion)]) ?> </li>
        <li><?= $this->Html->link(__('Lista  de direccion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva direccion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="direccion view large-9 medium-8 columns content">
    <h3><?= h($direccion->idDireccion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($direccion->idDireccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre de calle') ?></th>
            <td><?= h($direccion->nombreCalle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Externo') ?></th>
            <td><?= $this->Number->format($direccion->numeroExterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Interno') ?></th>
            <td><?= $this->Number->format($direccion->numeroInterior) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CodigoPostal') ?></th>
            <td><?= $this->Number->format($direccion->CodigoPostal_idCodigoPostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de Estado') ?></th>
            <td><?= $this->Number->format($direccion->Estado_idEstado) ?></td>
        </tr>
    </table>
</div>

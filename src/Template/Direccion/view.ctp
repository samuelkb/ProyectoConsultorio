<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Direccion'), ['action' => 'edit', $direccion->idDireccion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Direccion'), ['action' => 'delete', $direccion->idDireccion], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->idDireccion)]) ?> </li>
        <li><?= $this->Html->link(__('List Direccion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="direccion view large-9 medium-8 columns content">
    <h3><?= h($direccion->idDireccion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreCalle') ?></th>
            <td><?= h($direccion->nombreCalle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdDireccion') ?></th>
            <td><?= $this->Number->format($direccion->idDireccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumeroExterno') ?></th>
            <td><?= $this->Number->format($direccion->numeroExterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumeroInterior') ?></th>
            <td><?= $this->Number->format($direccion->numeroInterior) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CodigoPostal IdCodigoPostal') ?></th>
            <td><?= $this->Number->format($direccion->CodigoPostal_idCodigoPostal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado IdEstado') ?></th>
            <td><?= $this->Number->format($direccion->Estado_idEstado) ?></td>
        </tr>
    </table>
</div>

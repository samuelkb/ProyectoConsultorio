<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar bitacora'), ['action' => 'edit', $bitacora->idBitacora]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar bitacora'), ['action' => 'delete', $bitacora->idBitacora], ['confirm' => __('Are you sure you want to delete # {0}?', $bitacora->idBitacora)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de bitacora'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo registro de Bitacora'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bitacora view large-9 medium-8 columns content">
    <h3><?= h($bitacora->idBitacora) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Operacion') ?></th>
            <td><?= h($bitacora->operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($bitacora->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Servidor') ?></th>
            <td><?= h($bitacora->servidor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tabla') ?></th>
            <td><?= h($bitacora->tabla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdBitacora') ?></th>
            <td><?= $this->Number->format($bitacora->idBitacora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($bitacora->modificado) ?></td>
        </tr>
    </table>
</div>

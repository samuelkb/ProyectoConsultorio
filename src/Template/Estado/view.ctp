<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar estado'), ['action' => 'edit', $estado->idEstado]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar estado'), ['action' => 'delete', $estado->idEstado], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->idEstado)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estado view large-9 medium-8 columns content">
    <h3><?= h($estado->idEstado) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdEstado') ?></th>
            <td><?= $this->Number->format($estado->idEstado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre de Estado') ?></th>
            <td><?= h($estado->nombreEstado) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->idEstado]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->idEstado], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->idEstado)]) ?> </li>
        <li><?= $this->Html->link(__('List Estado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estado view large-9 medium-8 columns content">
    <h3><?= h($estado->idEstado) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreEstado') ?></th>
            <td><?= h($estado->nombreEstado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdEstado') ?></th>
            <td><?= $this->Number->format($estado->idEstado) ?></td>
        </tr>
    </table>
</div>

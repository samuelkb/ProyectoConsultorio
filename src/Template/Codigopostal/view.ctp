<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Codigopostal'), ['action' => 'edit', $codigopostal->idCodigoPostal]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Codigopostal'), ['action' => 'delete', $codigopostal->idCodigoPostal], ['confirm' => __('Are you sure you want to delete # {0}?', $codigopostal->idCodigoPostal)]) ?> </li>
        <li><?= $this->Html->link(__('List Codigopostal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Codigopostal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="codigopostal view large-9 medium-8 columns content">
    <h3><?= h($codigopostal->idCodigoPostal) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ciudad') ?></th>
            <td><?= h($codigopostal->ciudad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCodigoPostal') ?></th>
            <td><?= $this->Number->format($codigopostal->idCodigoPostal) ?></td>
        </tr>
    </table>
</div>

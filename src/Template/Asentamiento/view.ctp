<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asentamiento'), ['action' => 'edit', $asentamiento->idAsentamiento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asentamiento'), ['action' => 'delete', $asentamiento->idAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $asentamiento->idAsentamiento)]) ?> </li>
        <li><?= $this->Html->link(__('List Asentamiento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asentamiento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="asentamiento view large-9 medium-8 columns content">
    <h3><?= h($asentamiento->idAsentamiento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NombreAsentamiento') ?></th>
            <td><?= h($asentamiento->nombreAsentamiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAsentamiento') ?></th>
            <td><?= $this->Number->format($asentamiento->idAsentamiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TipoAsentamiento IdTipoAsentamiento') ?></th>
            <td><?= $this->Number->format($asentamiento->TipoAsentamiento_idTipoAsentamiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CodigoPostal IdCodigoPostal') ?></th>
            <td><?= $this->Number->format($asentamiento->CodigoPostal_idCodigoPostal) ?></td>
        </tr>
    </table>
</div>

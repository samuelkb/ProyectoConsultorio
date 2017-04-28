<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contacto'), ['action' => 'edit', $contacto->idContacto]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contacto'), ['action' => 'delete', $contacto->idContacto], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->idContacto)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacto view large-9 medium-8 columns content">
    <h3><?= h($contacto->idContacto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($contacto->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($contacto->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CorreoElectronico') ?></th>
            <td><?= h($contacto->correoElectronico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdContacto') ?></th>
            <td><?= $this->Number->format($contacto->idContacto) ?></td>
        </tr>
    </table>
</div>

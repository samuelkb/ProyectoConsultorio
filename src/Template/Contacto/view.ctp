<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar contacto'), ['action' => 'edit', $contacto->idContacto]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar contacto'), ['action' => 'delete', $contacto->idContacto], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->idContacto)]) ?> </li>
        <li><?= $this->Html->link(__('Lista  de contacto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo contacto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacto view large-9 medium-8 columns content">
    <h3><?= h($contacto->idContacto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contacto->idContacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($contacto->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo electrónico') ?></th>
            <td><?= h($contacto->correoElectronico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($contacto->telefono) ?></td>
        </tr>
    </table>
</div>

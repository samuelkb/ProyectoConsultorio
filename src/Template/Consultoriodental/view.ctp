<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar consultorio dental'), ['action' => 'edit', $consultoriodental->idConsultorioDental]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar consultorio dental'), ['action' => 'delete', $consultoriodental->idConsultorioDental], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoriodental->idConsultorioDental)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de consultorios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo consultorio dental'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de inventario'), ['controller' => 'Inventario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo item de inventario'), ['controller' => 'Inventario', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultoriodental view large-9 medium-8 columns content">
    <h3><?= h($consultoriodental->idConsultorioDental) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultoriodental->idConsultorioDental) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($consultoriodental->nombreConsultorio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de direccion') ?></th>
            <td><?= $this->Number->format($consultoriodental->Direccion_idDireccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id de contacto') ?></th>
            <td><?= $this->Number->format($consultoriodental->Contacto_idContacto) ?></td>
        </tr>
    </table>
</div>

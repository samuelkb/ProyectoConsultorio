<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $consultoriodental->idConsultorioDental],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consultoriodental->idConsultorioDental)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de consultorios dentales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de inventario'), ['controller' => 'Inventario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Inventario'), ['controller' => 'Inventario', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoriodental form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoriodental) ?>
    <fieldset>
        <legend><?= __('Editar Consultorio dental') ?></legend>
        <?php
            echo $this->Form->control('nombreConsultorio');
            echo $this->Form->control('Direccion_idDireccion');
            echo $this->Form->control('Contacto_idContacto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

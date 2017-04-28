<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $bitacora->idBitacora],
                ['confirm' => __('Estas seguro que quieres eliminar el # {0}?', $bitacora->idBitacora)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de bitacora'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bitacora form large-9 medium-8 columns content">
    <?= $this->Form->create($bitacora) ?>
    <fieldset>
        <legend><?= __('Editar Bitacora') ?></legend>
        <?php
            echo $this->Form->control('operacion');
            echo $this->Form->control('usuario');
            echo $this->Form->control('servidor');
            echo $this->Form->control('modificado por');
            echo $this->Form->control('sobre la tabla');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

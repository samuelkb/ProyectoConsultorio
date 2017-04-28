<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de bitacora'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bitacora form large-9 medium-8 columns content">
    <?= $this->Form->create($bitacora) ?>
    <fieldset>
        <legend><?= __('Añadir registro a bitacora') ?></legend>
        <?php
            echo $this->Form->control('operacion');
            echo $this->Form->control('usuario');
            echo $this->Form->control('servidor');
            echo $this->Form->control('modificado');
            echo $this->Form->control('tabla');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

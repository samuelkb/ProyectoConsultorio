<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de Asentamientos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="asentamiento form large-9 medium-8 columns content">
    <?= $this->Form->create($asentamiento) ?>
    <fieldset>
        <legend><?= __('Añadir Asentamiento') ?></legend>
        <?php
            echo $this->Form->control('nombre de Asentamiento');
            echo $this->Form->control('id Tipo de Asentamiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

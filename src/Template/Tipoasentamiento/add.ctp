<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Tipo de asentamientos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoasentamiento form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoasentamiento) ?>
    <fieldset>
        <legend><?= __('Añadir nuevo tipo de asentamiento') ?></legend>
        <?php
            echo $this->Form->control('descripciónAsentamiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

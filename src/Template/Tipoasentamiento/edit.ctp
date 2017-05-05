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
                ['action' => 'delete', $tipoasentamiento->idTipoAsentamiento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoasentamiento->idTipoAsentamiento)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Tipo de asentamientos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoasentamiento form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoasentamiento) ?>
    <fieldset>
        <legend><?= __('Editar tipo de asentamiento') ?></legend>
        <?php
            echo $this->Form->control('descripciónAsentamiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

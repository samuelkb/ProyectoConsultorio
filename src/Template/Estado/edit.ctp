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
                ['action' => 'delete', $estado->idEstado],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estado->idEstado)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de estados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estado form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Editar estado') ?></legend>
        <?php
            echo $this->Form->control('nombreEstado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

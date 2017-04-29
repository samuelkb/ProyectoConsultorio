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
                ['action' => 'delete', $codigopostal->idCodigoPostal],
                ['confirm' => __('Are you sure you want to delete # {0}?', $codigopostal->idCodigoPostal)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Codigos postales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="codigopostal form large-9 medium-8 columns content">
    <?= $this->Form->create($codigopostal) ?>
    <fieldset>
        <legend><?= __('Editar Codigopostal') ?></legend>
        <?php
            echo $this->Form->control('ciudad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

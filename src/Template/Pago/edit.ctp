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
                ['action' => 'delete', $pago->idPago],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pago->idPago)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de pagos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pago form large-9 medium-8 columns content">
    <?= $this->Form->create($pago) ?>
    <fieldset>
        <legend><?= __('Editar pagos') ?></legend>
        <?php
            echo $this->Form->control('concepto');
            echo $this->Form->control('importe');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

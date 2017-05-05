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
                ['action' => 'delete', $recibo->idRecibo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->idRecibo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de recibos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="recibo form large-9 medium-8 columns content">
    <?= $this->Form->create($recibo) ?>
    <fieldset>
        <legend><?= __('Editar recibo') ?></legend>
        <?php
            echo $this->Form->control('fechaExpedido');
            echo $this->Form->control('Pago_idPago');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

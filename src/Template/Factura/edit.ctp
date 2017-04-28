<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factura->idFactura],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factura->idFactura)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Factura'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="factura form large-9 medium-8 columns content">
    <?= $this->Form->create($factura) ?>
    <fieldset>
        <legend><?= __('Edit Factura') ?></legend>
        <?php
            echo $this->Form->control('RFC');
            echo $this->Form->control('IVA');
            echo $this->Form->control('desglose');
            echo $this->Form->control('Contacto_idContacto');
            echo $this->Form->control('RazonSocial_idRazonSocial');
            echo $this->Form->control('Pago_idPago');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

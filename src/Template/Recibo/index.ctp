<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recibo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recibo index large-9 medium-8 columns content">
    <h3><?= __('Recibo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idRecibo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaExpedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pago_idPago') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recibo as $recibo): ?>
            <tr>
                <td><?= $this->Number->format($recibo->idRecibo) ?></td>
                <td><?= h($recibo->fechaExpedido) ?></td>
                <td><?= $this->Number->format($recibo->Pago_idPago) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recibo->idRecibo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recibo->idRecibo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recibo->idRecibo], ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->idRecibo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

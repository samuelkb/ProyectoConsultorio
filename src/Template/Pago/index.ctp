<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo pago'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pago index large-9 medium-8 columns content">
    <h3><?= __('Pago') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idPago') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concepto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('importe') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pago as $pago): ?>
            <tr>
                <td><?= $this->Number->format($pago->idPago) ?></td>
                <td><?= h($pago->concepto) ?></td>
                <td><?= $this->Number->format($pago->importe) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $pago->idPago]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pago->idPago]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $pago->idPago], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->idPago)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primera')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

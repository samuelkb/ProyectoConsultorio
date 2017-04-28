<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Asentamiento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asentamiento index large-9 medium-8 columns content">
    <h3><?= __('Asentamiento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idAsentamiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreAsentamiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TipoAsentamiento_idTipoAsentamiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CodigoPostal_idCodigoPostal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asentamiento as $asentamiento): ?>
            <tr>
                <td><?= $this->Number->format($asentamiento->idAsentamiento) ?></td>
                <td><?= h($asentamiento->nombreAsentamiento) ?></td>
                <td><?= $this->Number->format($asentamiento->TipoAsentamiento_idTipoAsentamiento) ?></td>
                <td><?= $this->Number->format($asentamiento->CodigoPostal_idCodigoPostal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asentamiento->idAsentamiento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asentamiento->idAsentamiento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asentamiento->idAsentamiento], ['confirm' => __('Are you sure you want to delete # {0}?', $asentamiento->idAsentamiento)]) ?>
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

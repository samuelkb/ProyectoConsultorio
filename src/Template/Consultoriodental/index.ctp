<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultoriodental'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoriodental index large-9 medium-8 columns content">
    <h3><?= __('Consultoriodental') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idConsultorioDental') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreConsultorio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Direccion_idDireccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Contacto_idContacto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultoriodental as $consultoriodental): ?>
            <tr>
                <td><?= $this->Number->format($consultoriodental->idConsultorioDental) ?></td>
                <td><?= h($consultoriodental->nombreConsultorio) ?></td>
                <td><?= $this->Number->format($consultoriodental->Direccion_idDireccion) ?></td>
                <td><?= $this->Number->format($consultoriodental->Contacto_idContacto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultoriodental->idConsultorioDental]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultoriodental->idConsultorioDental]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultoriodental->idConsultorioDental], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoriodental->idConsultorioDental)]) ?>
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

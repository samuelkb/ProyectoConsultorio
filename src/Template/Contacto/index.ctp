<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacto index large-9 medium-8 columns content">
    <h3><?= __('Contacto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idContacto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correoElectronico') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacto as $contacto): ?>
            <tr>
                <td><?= $this->Number->format($contacto->idContacto) ?></td>
                <td><?= h($contacto->telefono) ?></td>
                <td><?= h($contacto->celular) ?></td>
                <td><?= h($contacto->correoElectronico) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contacto->idContacto]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contacto->idContacto]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contacto->idContacto], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->idContacto)]) ?>
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

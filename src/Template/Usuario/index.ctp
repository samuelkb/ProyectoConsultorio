<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuario index large-10 medium-8 columns content">
    <h3><?= __('Usuario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idUsuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombreUsuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidoPaterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidoMaterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Direccion_idDireccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Contacto_idContacto') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuario as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->idUsuario) ?></td>
                <td><?= h($usuario->nombreUsuario) ?></td>
                <td><?= h($usuario->apellidoPaterno) ?></td>
                <td><?= h($usuario->apellidoMaterno) ?></td>
                <td><?= h($usuario->password) ?></td>
                <td><?= $this->Number->format($usuario->Direccion_idDireccion) ?></td>
                <td><?= $this->Number->format($usuario->Contacto_idContacto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $usuario->idUsuario]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->idUsuario]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $usuario->idUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]) ?>
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

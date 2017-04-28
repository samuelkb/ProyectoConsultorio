<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contacto form large-9 medium-8 columns content">
    <?= $this->Form->create($contacto) ?>
    <fieldset>
        <legend><?= __('Add Contacto') ?></legend>
        <?php
            echo $this->Form->control('telefono');
            echo $this->Form->control('celular');
            echo $this->Form->control('correoElectronico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-5 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Inventario'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inventario form large-10 medium-8 columns content">
    <?= $this->Form->create($inventario) ?>
    <fieldset>
        <legend><?= __('Añadir item a inventario') ?></legend>
        <?php
            echo $this->Form->control('nombreItem');
            echo $this->Form->control('descripcionItem');
            echo $this->Form->control('stock');
            echo $this->Form->control('fechaDeCaducidad', ['empty' => true]);
            echo $this->Form->control('Categoria',array('options'=> $categoria));
            echo $this->Form->control('ConsultorioDental',array('options'=> $consultoriodental));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

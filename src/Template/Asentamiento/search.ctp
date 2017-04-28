<nav class="large-2 medium-5 columns" id="actions-sidebar">
  <ul class="side-nav">
    <li class="heading"><?= __('Acciones') ?></li>
    <li><?= $this->Html->link(__('Lista de asentamientos'),['action' => 'index']) ?></li>
  </ul>
</nav>
<div class="asentamiento form large-9 medium-8 columns content">
  <?= $this->Form->create($asentamiento) ?>
  <fieldset>
    <legend><?= __('Buscar Asentamiento') ?></legend>
    <?php
      echo $this->Form->input('nombre');
    ?>
  </fieldset>
  <?= $this->Form->button(__('Buscar')) ?>
  <?= $this->Form->end() ?>
</div>
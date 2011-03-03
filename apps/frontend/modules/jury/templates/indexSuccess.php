<h1>Comité de evaluación</h1>
<br/>
<div id="proyectos-list">
  <?php foreach($jurys as $jury): ?>
    <div id="" class="proyecto">
    <h3><strong><?php echo $jury->getName() ?></strong></h3>
      <div class="descripcion">
        <?php echo $jury->getDescription(ESC_RAW) ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
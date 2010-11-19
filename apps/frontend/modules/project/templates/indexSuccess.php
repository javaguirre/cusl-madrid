<h1>Lista de proyectos</h1>
<p>Hay <strong><?php echo $count_projects ?></strong> con un total de <strong><?php echo $num_participants ?> participantes</strong>.</p>

<div id="proyectos-list">
  <?php foreach($projects as $project): ?>
    <div id="" class="proyecto">
    <h3><strong><?php echo $project->getName() ?></strong></h3>
      <div class="descripcion">
        <?php echo $project->getDescription(ESC_RAW) ?>
      </div>
      <div class="enlaces">
        <?php if($project->getBlog() !== ''): ?>
          <a class="blog" href="<?php echo $project->getBlog() ?>"><img src ="/images/frontend/blog.png"> Blog</a>
        <?php endif; ?>
        <?php if($project->getRss() !== ''): ?>
          <a class="rss" href="<?php echo $project->getRss() ?>"><img src ="/images/frontend/rss-p.png"> Rss</a>
        <?php endif; ?>
        <?php if($project->getCode() !== ''): ?>
          <a class="forja" href="<?php echo $project->getCode() ?>"><img src ="/images/frontend/forja.png"> Forja</a>
        <?php endif; ?>
      </div>
      <table class="participantes">
        <?php foreach($project->getParticipants() as $participant): ?>
          <tr>
            <td class="nombre" style="font-weight: bold; padding-left: 3px; width: 40%; "><?php echo $participant->getName() ?></td>
            <td class="universidad"><?php echo $participant->getUniversity() ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  <?php endforeach ?>
</div>

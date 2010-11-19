     <h1><?php echo $project->getName() ?></h1>
     <div id="" class="proyecto">
       <div class="descripcion">
         <?php echo $project->getDescription(ESC_RAW) ?>
       </div>
       <table class="participantes">
         <tr>
           <td class="nombre"><?php echo $project->getParticipant() ?></td>
<td class="universidad">Universidad</td></tr>

</table></div>                                    </div> <!-- #content -->

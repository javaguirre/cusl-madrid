<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $jury->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $jury->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $jury->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $jury->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $jury->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('jury/edit?id='.$jury->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('jury/index') ?>">List</a>

<?php require 'array_list.php'; ?>
<html>
<body>
  <title>List of Friends</title>

</head>
<body>
<div class="wrapper">
<div class="page-body">
  <h2>My Friends</h2>
</div>
  <table class="table">
    <td>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
      </tr>
    </td>
    <tbody>
    <?php foreach ($friends as $friend): ?>
      <tr>
        <td><?=$friend['name'] ?></td>
        <td><?=$friend['age'] ?></td>
        <td><?=$friend['phone'] ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>
</body>
</html>

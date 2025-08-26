<h1>Users</h1>
<p><a href='/'>Homepage</a></p>
<table><tbody>
    
<?php foreach ($users as $user): ?>
    <tr>
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['name']) ?></td>
    </tr>
<?php endforeach; ?>

</tbody></table>
<table>
<thead>
<th>Asignatura</th><th>Profesor</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th>
</thead>
<tbody>
<? foreach($items as $item): ?>
<tr>
<td style="width: 20%;"><?= $item->nombre; ?></td>
<td style="width: 20%;"><?= $item->profesor; ?></td>
<td><?= $item->lunes; ?></td>
<td><?= $item->martes; ?></td>
<td><?= $item->miercoles; ?></td>
<td><?= $item->jueves; ?></td>
<td><?= $item->viernes; ?></td>
</tr>
<? endforeach; ?>
</tbody>
</table>



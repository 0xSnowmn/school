<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">PrivilegeId</th>
								<th class="column2">Prvilege Name</th>
								<th class="column2">Prvilege</th>
								<th class="column2">Control</th>
							</tr>
						</thead>
						<tbody>
								<?php if (false !== $privileges) : foreach ($privileges as $privilege) : ?>
								<tr>
									<td><?= $privilege->PrivilegeId ?></td>
									<td><?= $privilege->PrivilegeTitle ?></td>
									<td><?= $privilege->Privilege ?></td>
									<td>
									<a href="/privileges/edit/<?= $privilege->PrivilegeId ?>"><i class="fa fa-edit"></i></a>
									<a href="/privileges/delete/<?= $privilege->PrivilegeId ?>" ><i class="fa fa-trash"></i></a>
								</td>
								</tr>
								<?php endforeach;
							endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

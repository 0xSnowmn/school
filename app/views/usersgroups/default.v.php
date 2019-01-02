<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">GroupId</th>
								<th class="column2">Group Name</th>
								<th class="column2">Control</th>
							</tr>
						</thead>
						<tbody>
								<?php if (false !== $groups) : foreach ($groups as $group) : ?>
								<tr>
									<td><?= $group->GroupId ?></td>
									<td><?= $group->GroupName ?></td>
									<td>
									<a href="/usersgroups/edit/<?= $group->GroupId ?>"><i class="fa fa-edit"></i></a>
									<a href="/usersgroups/delete/<?= $group->GroupId ?>" ><i class="fa fa-trash"></i></a>
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

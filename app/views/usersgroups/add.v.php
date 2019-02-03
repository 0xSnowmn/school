<form class="appForm" method="POST" enctype="application/x-www-form-urlencoded">
  <div class="input">
    <label id="lg">Group Name</label>
    <input name="group" id="us" type="text" class="form-control w100" />
  </div>
    <div class="others">
      <?php if (false !== $groups) : foreach ($groups as $group) : ?>
        <input name="groups[]" value="<?= $group->PrivilegeId ?>" class="inp-cbx" id="cbx" type="checkbox" style="display: none;" />
    <label class="cbx" for="cbx">
      <span>
        <svg width="12px" height="10px" viewbox="0 0 12 10">
          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
        </svg>
      </span>
      <span><?= $group->PrivilegeTitle ?></span></label>

<?php endforeach;
endif; ?>
  </div>
  <input type="submit" name="submit" value="save" class="btn btn-danger save" />
</form>

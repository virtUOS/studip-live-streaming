<? if($info_message): ?>
    <?= $info_message ?>
<? endif; ?>
<? if($show_live_countdown): ?>
    <?= $this->render_partial('player/_live_countdown') ?>
<? endif; ?>
<? if($show_countdown): ?>
    <?= $this->render_partial('player/_countdown') ?>
<? endif; ?>
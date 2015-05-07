<legend>Answers</legend>
<?php foreach($this->answers as $answer): ?>
<legend class="control-label">
    <div class="col-lg-3 text-primary middleText">Name: <?= htmlspecialchars($answer[2]) ?></div>
    <div class="col-lg-3 text-primary middleText">Email: <?= htmlspecialchars($answer[3]) ?></div>
</legend>

<div class="col-lg-12">
    <textarea class="form-control" rows="5" id="textArea" disabled=""><?= htmlspecialchars($answer[1]) ?></textarea>
    <div class="help-block text-success"><?= htmlspecialchars($answer[4]) ?></div>
</div>
<?php endforeach ?>
<div class="form-group">
    <legend>Answers</legend>
    <?php foreach($this->question as $question): ?>
    <legend class="control-label">
        <div class="col-lg-3 text-primary">Name: <?= htmlspecialchars($question['responderName']) ?></div>
        <div class="col-lg-3 text-primary">Email: <?= htmlspecialchars($question['responderEmail']) ?></div>
    </legend>

    <div class="col-lg-12">
        <textarea class="form-control" rows="5" id="textArea"><?= htmlspecialchars($question['responderText']) ?></textarea>
        <div class="help-block text-success"><?= htmlspecialchars($question['answerDate']) ?></div>
    </div>
    <?php endforeach ?>
</div>



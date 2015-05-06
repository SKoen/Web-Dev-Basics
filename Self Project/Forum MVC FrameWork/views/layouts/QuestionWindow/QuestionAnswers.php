<div class="form-group">
    <legend>Answers</legend>
<legend class="control-label">
        <div class="col-lg-3 text-primary middleText">Name: <?= htmlspecialchars($this->question['responderName']) ?></div>
        <div class="col-lg-3 text-primary middleText">Email: <?= htmlspecialchars($this->question['responderEmail']) ?></div>
    </legend>

    <div class="col-lg-12">
        <textarea class="form-control" rows="5" id="textArea" disabled=""><?= htmlspecialchars($this->question['responderText']) ?></textarea>
        <div class="help-block text-success"><?= htmlspecialchars($this->question['answerDate']) ?></div>
    </div>
</div>



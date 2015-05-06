<div class="col-lg-12">
<h2><?= htmlspecialchars($this->question['questionTitle']) ?></h2>
<div class="col-md-2"><?= htmlspecialchars($this->question['username']) ?></div>
<div class="col-md-10"><?= htmlspecialchars($this->question['questionDate']) ?></div>
<div class="form-group">
    <label for="textArea" class="col-lg-2 control-label"></label>
    <div class="col-lg-10">
        <textarea class="form-control"  id="disabledInput" rows="3" disabled=""><?= htmlspecialchars($this->question['questionText']) ?></textarea>
    </div>
    <br>
</div>
    <div class="col-lg-10" >SEEN <span class="badge"><?= htmlspecialchars($this->question['numberOfViews']) ?></span></div>
    <div onclick="showhideanswers()" class="col-lg-1 btn-xs btn-primary" id="showhidebutton" >Write Answer</div>
</div>


<div class="col-lg-12">
<h2><?= htmlspecialchars($this->question[0]['questionTitle']) ?></h2>
<div class="col-md-2"><?= htmlspecialchars($this->question[0]['username']) ?></div>
<div class="col-md-10"><?= htmlspecialchars($this->question[0]['questionDate']) ?></div>
<div class="form-group">
    <label for="textArea" class="col-lg-2 control-label"></label>
    <div class="col-lg-10">
        <textarea class="form-control"  id="disabledInput" rows="3" disabled=""><?= htmlspecialchars($this->question[0]['questionText']) ?></textarea>
    </div>
    <br>
</div>
    <div class="col-lg-10" >SEEN <span class="badge"><?= htmlspecialchars($this->question[0]['numberOfViews']) ?></span></div>
    <div onclick="showhideanswers()" class="col-lg-1 btn-xs btn-primary" id="showhidebutton" >Write Answer</div>
</div>


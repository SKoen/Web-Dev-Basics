<form class="form-horizontal" method="post" action="/questions/create">
    <fieldset>
        <legend>Create New Question</legend>
        <div class="form-group">
            <label for="inputQName" class="col-lg-2 control-label">Question Title :</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputQName" name="name" placeholder="Question title">
            </div>
        </div>
        <div class="form-group">
            <label for="inputQText" class="col-lg-2 control-label">Question Text</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="text" rows="5" id="inputQTextx"></textarea>
            </div>
        </div>
        <input type="hidden" name="username" value="<?=$_SESSION['username']?>">
    </fieldset>
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>
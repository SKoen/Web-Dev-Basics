<label for="select" class="col-lg-2 control-label">Choose Category</label>
<div class="col-lg-10">
    <select class="form-control" id="select" name="categoryId">
        <?php foreach($this->categories as $category): ?>
            <option value=<?=$category[0]?>><?php echo $category[1]?></option>
        <?php endforeach ?>
    </select>
</div>
<div class="form-group" id="answers">
    <?php ?>
    <script>
        (function() {
            $.ajax({
                url: '/answers/getall/<?=$this->question['questionId']?>',
                method: 'get'
            }).success(function (data) {
                $('#answers').html(data);
            })
        }())
    </script>
</div>



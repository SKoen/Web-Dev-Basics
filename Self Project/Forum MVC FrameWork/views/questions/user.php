
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Question Title</th>
        <th>Author</th>
        <th>Number Of Visits</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <?php if($this->questions !=null): ?>
        <tr class="info">
            <td><?= htmlspecialchars($this->questions['questionId']) ?></td>
            <td><?= htmlspecialchars($this->questions['questionTitle']) ?></td>
            <td><?= htmlspecialchars($this->questions['username']) ?></td>
            <td><?= htmlspecialchars($this->questions['numberOfViews']) ?></td>
            <td><?= htmlspecialchars($this->questions['dateCreated']) ?></td>
            <td><a href="/questions/show/<?=$this->questions['questionId']?> ">READ</a></td>
        </tr>
        <tr class="active">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php endif; ?>
    <tr class="active">
        <td><a href="/questions/create">ADD NEW QUESTION</a></td>
    </tr>
    </tbody>
</table>
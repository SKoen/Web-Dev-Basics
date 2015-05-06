
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
    <?php foreach($this->questions as $question): ?>
        <tr class="info">
            <td><?= htmlspecialchars($question['questionId']) ?></td>
            <td><?= htmlspecialchars($question['questionTitle']) ?></td>
            <td><?= htmlspecialchars($question['username']) ?></td>
            <td><?= htmlspecialchars($question['numberOfViews']) ?></td>
            <td><?= htmlspecialchars($question['dateCreated']) ?></td>
            <td><a href="/questions/show/<?=$question['questionId']?> ">READ</a></td>
        </tr>
        <tr class="active">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php endforeach ?>
    <tr class="active">
        <td><a href="/questions/create">ADD NEW QUESTION</a></td>
    </tr>
    </tbody>
</table>

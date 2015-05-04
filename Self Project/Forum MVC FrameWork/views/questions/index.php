
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Number Of Question</th>
        <th>Question Name</th>
        <th>NumberOfVisits</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach($this->questions as $question): ?>
          <tr class="info">
            <td><?= htmlspecialchars($question['questionId']) ?></td>
            <td><?= htmlspecialchars($question['questionTitle']) ?></td>
            <td><?= htmlspecialchars($question['numberOfViews']) ?></td>
          <td><a href="/questions/<?=$question['questionId']?> ">READ</a></td>
        </tr>
        <tr class="active">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

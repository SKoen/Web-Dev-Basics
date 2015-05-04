<table>
    <tr>
        <th>AuthorName</th>
        <th>QuestionName</th>
        <th>QuestionText</th>
        <th>NumberOfVisits</th>
    </tr>
    <?php foreach($this->questions as $question): ?>
    <tr>
        <td><?= htmlspecialchars($question['AuthorName']) ?></td>
        <td><?= htmlspecialchars($question['QuestionName']) ?></td>
        <td><?= htmlspecialchars($question['QuestionText']) ?></td>
        <td><?= htmlspecialchars($question['NumberOfVisits']) ?></td>
    </tr>
    <?php endforeach ?>
</table>
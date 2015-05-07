
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Question Title</th>
        <th>Author</th>
        <th>Number Of Visits</th>
        <th>Date</th>
        <th>Category</th>
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
              <td><?= htmlspecialchars($question['categoryName']) ?></td>
              <td><a href="/questions/show/<?=$question['questionId']?> ">READ</a></td>
              <?php if(isset($_SESSION['username']))if(isset($_SESSION['isAdmin'])||$_SESSION['username']==$question['username']): ?>
              <td><a href="/questions/delete/<?=$question['questionId']?> ">DELETE</a></td>
              <?php endif;?>
        </tr>
        <tr class="active">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

<ul class="pager">
    <?php if($this->page>0):?>
        <li class="previous"><a href="/questions/index/<?=$this->page-1?>/<?=$this->pageSize?>">← Older</a></li>
    <?php endif ?>
    <?php if(count($this->questions)==$this->pageSize):?>
    <li class="next"><a href="/questions/index/<?=$this->page+1?>/<?=$this->pageSize?>">Newer →</a></li>
    <?php endif ?>
</ul>

<ul class="list-group">
    <? foreach ($courses as $course): ?>
        <li class="list-group-item"><a href="courses/view/<?= $course['course_id'] ?>"><?= $course['course_name'] ?></a></li>
    <? endforeach ?>
</ul>
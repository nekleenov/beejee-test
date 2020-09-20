<div class="row">
    <div class="col col-lg-11">
        Пользователь: <b><? echo $data['login']; ?></b>
    </div>
    <div align="right" class="col">
        <a href="/login/logout" class="btn-sm btn-outline-primary">Выход</a>
    </div>
</div>
<hr>
<div class="table-responsive mt-4">
    <table class="table table-bordered mb-4">
        <thead>
        <tr>
            <th width="200"><a href="?sort=name">Имя пользователя <i class="fa <? echo $data['sortName']; ?>"></i></a></th>
            <th width="200"><a href="?sort=email">E-Mail <i class="fa <? echo $data['sortEmail']; ?>"></i></a></th>
            <th>Текст</th>
            <th width="200" class="text-center"><a href="?sort=status">Статус <i class="fa <? echo $data['sortStatus']; ?>"></i></a></th>
            <th width="100" class="text-center">Действия</th>
        </tr>
        </thead>
        <tbody>
            <?PHP echo implode( "\n", $data['listTake'] ); ?>
        </tbody>
    </table>
</div>

<div class="paginating-container pagination-default">
    <?PHP echo $data['page']; ?>
</div>
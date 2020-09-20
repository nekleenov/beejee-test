<form class="simple-example2 text-left" id="editForm" action="javascript:void(0);" novalidate>
    <div class="info">
        <input name="id" type="hidden" value="<? echo $data['id']; ?>">
        <h5 class="">Редактор задачи</h5>
        <div class="row mb-4 mt-4">
            <div class="col mx-auto">
                <div class="form-group">
                    <label for="task">Текст задачи</label>
                    <textarea class="form-control" id="task" name="get_task" required placeholder="Введите текст задачи" rows="10"><? echo $data['task']; ?></textarea>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните задачу.
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-4">
            <div class="col mx-auto">
                <div class="form-group">
                    <label for="status">Задача выполнена?</label><br>
                    <label class="switch s-icons s-outline  s-outline-success">
                        <input id="status" name="status" type="checkbox" <? echo $data['checked']; ?> >
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-4">
            <div class="col mx-auto">
                <input type="submit" class="btn btn-primary">
                <a href="/admin" class="btn btn-danger">Отмена</a>
            </div>
        </div>
    </div>
</form>
<form class="simple-example text-left" id="addForm" action="javascript:void(0);" novalidate>
    <div class="info">
        <h5 class="">Добавить задачу</h5>

        <div class="row mb-4 mt-4">
            <div class="col">
                <div class="form-group">
                    <label for="name">Имя пользователя</label>
                    <input type="text" id="name" class="form-control" name="get_name" placeholder="Имя пользователя" required>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните имя пользователя.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" class="form-control" name="get_email" placeholder="E-Mail" required>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните E-Mail.
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-4">
            <div class="col mx-auto">
                <div class="form-group">
                    <label for="task">Текст задачи</label>
                    <textarea class="form-control" id="task" name="get_task" required placeholder="Введите текст задачи" rows="10"></textarea>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните текст задачи.
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-4">
            <div class="col mx-auto">
                <input type="submit" class="btn btn-primary">
                <a href="/" class="btn btn-danger">Отмена</a>
            </div>
        </div>
    </div>
</form>
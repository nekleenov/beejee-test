<h1 class="">Авторизация</h1>
<p class="signup-link"><a href="/main/index">Вернуться на главную?</a></p>
<form class="simple-example text-left" id="loginForm" action="javascript:void(0);" novalidate>
    <div class="form">

        <div id="username-field" class="field-wrapper input">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            <input id="username" name="login" type="text" class="form-control" placeholder="Введите ваш логин" required>
            <div class="invalid-feedback">
                Пожалуйста, заполните логин.
            </div>
        </div>

        <div id="password-field" class="field-wrapper input mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <input id="password" name="password" type="password" class="form-control" placeholder="Введите ваш пароль" required>
            <div class="invalid-feedback">
                Пожалуйста, заполните пароль.
            </div>
        </div>
        <div class="d-sm-flex justify-content-between">
            <div class="field-wrapper toggle-pass">
                <p class="d-inline-block">Показать пароль</p>
                <label class="switch s-primary">
                    <input type="checkbox" id="toggle-password" class="d-none">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="field-wrapper">
                <button type="submit" class="btn btn-primary" value="">Войти</button>
            </div>

        </div>

    </div>
</form>
<p class="terms-conditions" style="width: 500px;">© 2020 All Rights Reserved.</p>
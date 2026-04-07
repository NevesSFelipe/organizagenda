<div class="login-wrapper">

    <div class="login-container">

        <div class="logo">Área do Funcionário</div>

        <h2>Bem-vindo</h2>
        <p>Faça login para acessar o sistema</p>

        <form action="<?= $base ?>login" method="POST">

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" required>
            </div>

            <button type="submit" class="btn-login">Entrar</button>

        </form>

        <div class="extra">
            <a href="#">Esqueci minha senha</a>
        </div>

    </div>

</div>
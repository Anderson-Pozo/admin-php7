<html>
<body>
<form action="" method="post">
    <?php
    if (isset($errorMessage)){
        echo "<span class=\"badge badge-danger\">" . $errorMessage . "</span>";
    }
    ?>
    <div class="form-group">
        <div class="form-row">
            <div class="col"><label class="text-secondary">Nombre:&nbsp;</label>
                <input class="form-control" name="name" type="text" required="true" pattern="[A-Za-z]+">
            </div>
            <div class="col"><label class="text-secondary">Apellido:&nbsp;</label>
                <input class="form-control" name="lastname" type="text" required="true" pattern="[A-Za-z]+">
            </div>
            <div class="col"><label class="text-secondary">Nombre de usuario:&nbsp;</label>
                <input class="form-control" name="username" type="text" required="true" pattern="[A-Za-z]+">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col"><label class="text-secondary">Email:</label>
                <input class="form-control" name="email" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email">
            </div>
        </div>
    </div>
    <div class="form-group"><label class="text-secondary">Contraseña:</label>
        <input class="form-control" name="password" type="password" required="true">
    </div>
    <button class="btn btn-info mt-2" type="submit">Aceptar</button>
</form>
</body>
</html>

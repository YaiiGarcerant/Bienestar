<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <form method="POST" action="/registerSena">
        @csrf
            <div>
                <label for="name">Nombre:</label>
                <input id="name" type="text" name="name"  required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" required>
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div>
                <label for="password-confirm">Confirmar Contraseña:</label>

                <div>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                </div>
            </div>

            <div>
                <button type="submit" >
                    Registrarse
                </button>
            </div>
        </form>
</body>
</html>
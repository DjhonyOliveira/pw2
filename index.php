<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="title">
            <h1>Informe seu dados!!!</h1>
            <hr>
        </div>
    </header>
    <section>
        <div class="formulario">
            <fieldset>
                <legend>Formulário</legend>
                <form action="retorna.php" method="post">
                    <table>
                        <tr class="name">
                            <td>
                                <label for="name">Nome:</label>
                            </td>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr class="contact">
                            <td>
                                <label for="phone">Telefone:</label>
                            </td>
                            <td>
                                <input type="tel" name="phone" id="phone">
                            </td>
                            <td>
                                <label for="email">E-mail:</label>
                            </td>
                            <td>
                                <input type="email" name="email" id="email">
                            </td>
                        </tr>
                        <tr class="texto">
                            <td>
                                <label for="text">Texto:</label>
                            </td>
                            <td>
                                <textarea name="texto" id="texto"></textarea>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <button type="submit">Enviar</button>
                </form>
            </fieldset>
        </div>
    </section>
    <footer>
        <div class="developed">
            <p>Desenvolvido por Djonatan</p>
        </div>
    </footer>
</body>
</html>
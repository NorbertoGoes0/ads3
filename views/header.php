<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../style/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (localStorage.getItem("theme") === "dark") {
                setDarkTheme();
            } else {
                setLightTheme();
            }
        });

        function setLightTheme() {
            document.documentElement.setAttribute("data-theme", "light");
            localStorage.setItem("theme", "light");
        }

        function setDarkTheme() {
            document.documentElement.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
        }

        function toggleTheme() {
            if (localStorage.getItem("theme") === "dark") {
                setLightTheme();
            } else {
                setDarkTheme();
            }
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="alunos.php">
                <img src="icon/logo.svg" alt="Students" width="200">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="alunos.php">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adicionar_aluno.php">Adicionar Aluno</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link nav-link" onclick="toggleTheme()">Mudar Tema</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
    // Função para habilitar o tema escuro
    function enableDarkTheme() {
        $('body').addClass('dark-mode');
        localStorage.setItem('theme', 'dark');
    }

    // Função para habilitar o tema claro
    function enableLightTheme() {
        $('body').removeClass('dark-mode');
        localStorage.setItem('theme', 'light');
    }

    // Função para alternar o tema
    function toggleTheme() {
        if ($('body').hasClass('dark-mode')) {
            enableLightTheme();
        } else {
            enableDarkTheme();
        }
    }

    $(document).ready(function () {
        // Verificar o tema atual no armazenamento local
        var currentTheme = localStorage.getItem('theme');

        // Aplicar o tema escuro se o tema atual for claro
        if (currentTheme === 'light') {
            enableDarkTheme();
        }

        // Definir o estado do seletor de acordo com o tema atual
        if (currentTheme === 'dark') {
            $('#themeSwitch').prop('checked', true);
        }

        // Adicionar evento de alteração para o seletor de tema
        $('#themeSwitch').change(function () {
            toggleTheme();
        });
    });
</script>

</body>
</html>

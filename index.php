<meta charset="UTF-8">
<script>

    function pulaLinha() {

        document.write("<br>");
    }

    function mostra(frase) {

        document.write(frase);
        pulaLinha();
    }

    var contador = 50

    mostra("mostrar todos os número pares de 50 a 75");

    while (contador <= 75) {

        mostra("Número: " + contador);
        contador = contador + 2;

    }

    mostra("fim")

</script>
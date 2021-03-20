<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ed1a7bf4c2.js" crossorigin="anonymous"></script>

<script>
    $(function() {
        var cidades = <?php echo json_encode($autocompleteDestino) ?>;
        $("#destino").autocomplete({
            source: cidades
        });
        console.log(cidades)
    });
    $(function() {
        var cidades = <?php echo json_encode($autocompleteOrigem) ?>;
        $("#origem").autocomplete({
            source: cidades,
        });
        console.log(cidades)
    });
</script>

</body>

</html>
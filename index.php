<?php
    include_once("templates/header.php");
?>
<body>
    <div id="main-banner">
        <h1>Faça seu Pedido</h1>
    </div>
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <!--ocupa 12 colunas do grid do bootstrap!-->
                    <h2>Monte a pizza como desejar</h2>
                    <form action="process/pizzas.php" method="POST" id="pizza-form">
                        <div class="form-group">
                            <label for="borda">Borda</label>
                            <select name="borda" id="borda" class="form-control">
                                <option value="">Selecione a borda</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="massa">Massa</label>
                            <select name="massa" id="massa" class="form-control">
                                <option value="">Selecione a massa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sabores">Sabores: (Máximo 3)</label>
                            <select multiple name="sabores[]" id="sabores" class="form-control">
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Fazer Pedido!">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once("templates/footer.php");
?>
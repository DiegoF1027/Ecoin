<!DOCTYPE html>
<html lang="es">
<?php

    require_once("./components/head.php")

?>
<body>
    <?php

        require_once("./components/nav.php")

    ?>
    <?php

        require_once("./components/asidebar.php")

    ?>
    <main>
        <div class="container">
            <div class="card calculator">
                <div class="card-header bg-success text-white center-text">
                    <h4 class="calculator-title mb-0">CALCULADORA</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form">
                        <div class="form-group center-text">
                            <select name="operador" id="operador" class="form-control mt-2" required>
                                <option disabled selected>Seleccione una operación....</option>
                                <option value="suma">Suma</option>
                                <option value="resta">Resta</option>
                                <option value="multiplicacion">Multiplicación</option>
                                <option value="division">División</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="numero1">Número 1</label>
                            <input type="number" name="numero1" id="numero1" placeholder="Número 1" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="numero2">Número 2</label>
                            <input type="number" name="numero2" id="numero2" placeholder="Número 2" class="form-control" required>
                        </div>
                        <div class="center-text mt-2">
                            <button type="submit" class="btn btn-success">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3 center-text">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $numero1 = isset($_POST["numero1"]) ? $_POST["numero1"] : null;
                    $numero2 = isset($_POST["numero2"]) ? $_POST["numero2"] : null;
                    $operador = isset($_POST["operador"]) ? $_POST["operador"] : null;

                    if ($numero1 !== null && $numero2 !== null && $operador !== null) {
                        $resultado = 0;
                        $resultadoColor = "";

                        if ($operador == "suma") {
                            $resultado = $numero1 + $numero2;
                            $resultadoColor = "text-success";
                        }

                        if ($operador == "resta") {
                            $resultado = $numero1 - $numero2;
                            $resultadoColor = "text-danger";
                        }

                        if ($operador == "multiplicacion") {
                            $resultado = $numero1 * $numero2;
                            $resultadoColor = "text-success";
                        }

                        if ($operador == "division") {
                            if ($numero2 != 0) {
                                $resultado = $numero1 / $numero2;
                                $resultadoColor = "text-danger";
                            } else {
                                print("<div class='alert alert-danger'>Error: División entre cero no permitida.</div>");
                            }
                        }

                        if ($resultadoColor != "") {
                            print("<h4 class='$resultadoColor'>El resultado de la " . $operador . " entre " . $numero1 . " y " . $numero2 . " es: " . $resultado . "</h4>");
                        }
                    }
                }
                ?>
            </div>
        </div>
    </main>
    <?php

        require_once("./components/footer.php")

    ?>
</body>
<?php

    require_once("./components/scriptaside.php")

?>
</html>
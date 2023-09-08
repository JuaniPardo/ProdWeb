<?php
// Iniciar la sesión
session_start();

require_once 'Modelos/Cart.php';

// Manejar las acciones del carrito
if (isset($_GET['action']) && $_GET['action'] === 'add') {
    // Agregar un producto al carrito
    if (isset($_GET['code']) && isset($_GET['quantity'])) {
        $code = $_GET['code'];
        $quantity = (int)$_GET['quantity'];
        Cart::add($code, $quantity);
    }
} elseif (isset($_GET['action']) && $_GET['action'] === 'remove') {
    // Eliminar un producto del carrito
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        Cart::remove($code);
    }
} elseif (isset($_GET['action']) && $_GET['action'] === 'clear') {
    // Vaciar carrito
    Cart::clear();
}

// Mostrar el contenido del carrito
$cart = Cart::get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <!-- Agrega los enlaces CDN de Bootstrap para mejorar el aspecto -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
          integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">


    <h1 class="display-5 mb-4">Carrito de Compras</h1>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card p-3">
                <h2 class="display-6 mb-4">Agregar Productos</h2>

                <!-- Formulario para agregar productos -->
                <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="GET" >
                    <input type="hidden" name="action" value="add">
                    <div class="mb-3">
                        <label for="code" class="form-label">Código del producto:</label>
                        <input type="text" name="code" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Cantidad:</label>
                        <input type="number" name="quantity" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                </form>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card p-3">
                <!-- Lista de productos en el carrito -->
                <h2 class="display-6 mb-4">Productos en el carrito: <i class="bi bi-cart"></i></h2>
                <ul class="list-group">
                    <?php foreach ($cart as $code => $quantity): ?>
                        <li class="list-group-item">
                            Código: <?php echo $code; ?>,
                            Cantidad: <?php echo $quantity; ?>
                            <a href="index.php?action=remove&code=<?php echo $code; ?>"
                               class="btn btn-danger btn-sm float-end">Eliminar</a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Botón para vaciar el carrito si hay elementos -->
                <?php if (!empty($cart)): ?>
                    <a href="index.php?action=clear" class="btn btn-danger mt-3">Vaciar Carrito</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Agrega los scripts de Bootstrap (jQuery y Popper.js son requeridos) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+ji+E8JZ6s5OmF0aPzLx7i5u78f5mY3cC5lNI6QYv5q2bSTj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-hjWs63z8m1r2jyISzAogKaB90I0t7xVJjI5K5Vpzf3l5l5/cz5F5r5l5i5m5b5l5"
        crossorigin="anonymous"></script>
</body>
</html>

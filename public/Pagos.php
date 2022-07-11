<?php
// include database configuration file
include './layout/Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM usuarios WHERE ClaveUsuario = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<main class="main">
            <style>
            .container{padding: 20px;}
            .table{width: 65%;float: left;}
            .shipAddr{width: 30%;float: left;margin-left: 30px;}
            .footBtn{width: 95%;float: left;}
            .orderBtn {float: right;}
            </style>
        <div class="container">
        <div class="panel panel-default">
        <div class="panel-heading"> 

        <ul class="nav nav-pills">
        <li role="presentation"><a href="?p=index">Inicio</a></li>
        <li role="presentation"><a href="?p=VerCarta">Ver Carta</a></li>
        <li role="presentation" class="active"><a href="?p=Pagos">Pagos</a></li>
        </ul>
        </div>

        <div class="panel-body">
            <h1>Vista previa de la Orden</h1>
            <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Pricio</th>
                    <th>Cantidad</th>
                    <th>Sub total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($cart->total_items() > 0){
                    //get cart items from session
                    $cartItems = $cart->contents();
                    foreach($cartItems as $item){
                ?>
                <tr>
                    <td><?php echo $item["nombre"]; ?></td>
                    <td><?php echo '$'.$item["precio"].' USD'; ?></td>
                    <td><?php echo $item["qty"]; ?></td>
                    <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="4"><p>No hay articulos en tu carta......</p></td>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <?php if($cart->total_items() > 0){ ?>
                    <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
                    <?php } ?>
                </tr>
            </tfoot>
            </table>

            <div class="footBtn">
                <a href="http://localhost/projectC/index.php?p=index" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
                <a href="?p=AccionCarta&action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
            </div>
                </div>
        <div class="panel-footer">Orange</div>
        </div><!--Panel cierra-->
        </div>
</main>



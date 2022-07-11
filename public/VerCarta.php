<?php
// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;
?>
<main class="main">
            <script>
            function updateCartItem(obj,id){
                $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
                    if(data == 'ok'){
                        location.reload();
                    }else{
                        alert('No se ha podido carga, intente de nuevo.');
                    }
                });
            }
            </script>

        <div class="container">
        <div class="panel panel-default">
        <div class="panel-heading"> 

        <ul class="nav nav-pills">
        <li role="presentation"><a href="?p=index">Inicio</a></li>
        <li role="presentation" class="active"><a href="?p=VerCarta">Ver Carta</a></li>
        <li role="presentation"><a href="?p=Pagos">Pagos</a></li>
        </ul>
        </div>

        <div class="panel-body">


            <h1>Carrito de compras</h1>
            <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Sub total</th>
                    <th>&nbsp;</th>
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
                    <td><?php echo '$'.$item["precio"].' Pesos'; ?></td>
                    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                    <td><?php echo '$'.$item["subtotal"].' Pesos'; ?></td>
                    <td>
                        <a href="?p=AccionCarta&action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="5"><p>Tu carta esta vacia.....</p></td>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="http://localhost/projectC/index.php?p=index" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
                    <td colspan="2"></td>
                    <?php if($cart->total_items() > 0){ ?>
                    <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
                    <td><a href="?p=Pagos" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
                    <?php } ?>
                </tr>
            </tfoot>
            </table>
            
            </div>
        <div class="panel-footer">Orange</div>
        </div><!--Panel cierra-->
        
        </div>
</main>
  

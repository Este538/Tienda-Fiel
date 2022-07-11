<?php
include './layout/Configuracion.php';
?>
<main class="main">
         <div class="container-tabla">
        <div class="panel panel-default">
        <div class="panel-heading"> 

        <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="?p=index">Inicio</a></li>
        <li role="presentation"><a href="?p=VerCarta">Ver Carta</a></li>
        <li role="presentation"><a href="?p=Pagos">Pagos</a></li>
        </ul>
        </div>

        <div class="panel-body">
            <h1>Mis Productos</h1>

            <div>
                <form action="http://localhost/projectC/index.php?p=buscar" method="post">
                <input
                        type="text"
                        placeholder="Busqueda"
                        name="search"
                        required>
                    <button type="submit" name="submit">Buscar</button>
                </form>
            </div>

            <a href="?p=VerCarta" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
            <div id="products" class="row list-group">
                <?php
                //get rows query
                $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
                if($query->num_rows > 0){ 
                    while($row = $query->fetch_assoc()){
                ?>
                <div class="item col-lg-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4 class="list-group-item-heading"><?php echo $row["nombre"]; ?></h4>
                            <p class="list-group-item-text"><?php echo $row["descripcion"]; ?></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="lead"><?php echo '$'.$row["precio"].' Pesos'; ?></p>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-success" href="?p=AccionCarta&action=addToCart&id=<?php echo $row["id"]; ?>">Agregar a Carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } }else{ ?>
                <p>Producto(s) no existe.....</p>
                <?php } ?>
            </div>
            
                </div>
        <div class="panel-footer">Orange</div>
        </div><!--Panel cierra-->
        
        </div>

</main>


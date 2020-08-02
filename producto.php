<?php 

require_once("includes/header.php");

if(!isset($_GET["id"])){ // Si no  pasa ningun valor de la variable GET
    ErrorMessage::show("No se paso ningun Id del producto"); // No carga el demas codigo de este script
}

$producto = new Producto($con, $_GET["id"]);

?>

<div class="previewContainerDos">
    
    <div class="product">
        <div class="productView">
            <img src="<?php echo $producto->getThumbnail(); ?>" alt="">
        </div>
        <div class="productView productDescription">
            <h1><?php echo $producto->getName(); ?></h1>
            <h3><?php echo $producto->getDescription(); ?></h3>
            <br><br>
            <p class="precio">$ <?php echo $producto->getPrecio(); ?></p>
            <button class="buttonPay">Pedir</button>
            <button class="buttonAdd">Agregar al carrito</button>
        </div>
    </div>
</div>



<?php 
$categoyContainer = new CategoryContainers($con);
echo $categoyContainer->showCategory($producto->getCategoryId(), "También puedes agregar");

include_once("includes/footer.php"); ?>

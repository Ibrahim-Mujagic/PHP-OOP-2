<?php foreach($pet_shop_products as $product): ?>
<div class="card-product">
  <div class="image-container">
    <img src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>">
  </div>
  <div class="text-card">
  <i class="<?php echo $product->category->setIcon(); ?>"></i>
    <h2><?php echo $product->name  ?></h2>
    <h4><?php echo $product->brand ?></h4>
    <h4><?php echo $product->price ?>$</h4>
    <?php if(get_class($product)==='Food'): ?>
      <h5>Peso:<?php echo $product->weight ?></h5>
      <h5>Sapore:<?php echo $product->taste ?></h5>
      <h5>Ingredienti:<?php echo $product->ingredients->getAllIngredients() ?></h5>
    <?php elseif(get_class($product)==='Sit'): ?>
      <h5>Dimensione:<?php echo $product->size ?></h5>
      <h5>Materiale:<?php echo $product->material ?></h5>
      <?php elseif(get_class($product)==='Toy'): ?>
      <h5>Dimensione:<?php echo $product->size ?></h5>
      <h5>Materiale:<?php echo $product->feature ?></h5>
    <?php endif; ?>
  </div>
</div>
<?php endforeach; ?>
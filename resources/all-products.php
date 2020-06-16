<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="/delete" method="POST" >
        <div class="all_product">
            <h2>All Products</h2>
            <a href="/">Add Products</a>
            <button type="submit" class="btn">Apply</button>
        </div>
        <hr>
        <div class="cards">
            <?php foreach ($products as $product) :?>
                <?php if ($product->size) :?>
                    <div class="card" id="">
                        <input type="checkbox" name="del[]" value="<?php echo $product->id?>">
                        <p><?php echo $product->sku?></p>
                        <p><?php echo $product->name?></p>
                        <p>Price: <?php echo $product->price?> $</p>
                        <p>Size: <?php echo $product->size?> MB</p>
                    </div>
                <?php elseif($product->weight) :?>
                    <div class="card">
                        <input type="checkbox" name="del[]" value="<?php echo $product->id?>">
                        <p><?php echo $product->sku?></p>
                        <p><?php echo $product->name?></p>
                        <p>Price: <?php echo $product->price?> $</p>
                        <p>Weight: <?php echo $product->weight?> KG</p>
                    </div>
                <?php elseif($product->height):?>
                    <div class="card">
                        <input type="checkbox" name="del[]" value="<?php echo $product->id?>">
                        <p><?php echo $product->sku?></p>
                        <p><?php echo $product->name?></p>
                        <p>Price: <?php echo $product->price?> $</p>
                        <p>Dimension: <?php echo $product->height?>x<?php echo $product->width?>x<?php echo
                            $product->length?></p>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </form>
</div>
</body>
</html>
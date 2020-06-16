<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Add Product</title>
</head>
<body>
    <div class="container">
        <form action="/add-new" method="POST">
            <div class="add_product">
                <h2>Product Add</h2>
                <a href="/products">All Products</a>
                <button type="submit" class="btn">Save</button>
            </div>
            <hr>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" id="sku" name="sku" placeholder="sku...">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="name...">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" step="0.01" name="price" placeholder="price...">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type" onchange="run()">
                    <option value="0" selected>Chose option</option>
                    <option value="size">Size</option>
                    <option value="weight">Weight</option>
                    <option value="dimension">Dimension</option>
                </select>
            </div>

            <div class="sel-group">
                <div id="sel-size" class="selected form-group" style="display:none">
                    <label for="size">Enter size of product:</label>
                    <input type="number" step="0.01" name="size" id="size">
                </div>
                <div id="sel-weight" class="selected form-group" style="display:none">
                    <label for="weight">Enter weight of product:</label>
                    <input type="number" step="0.01" name="weight" id="weight">
                </div>
                <div id="sel-dimension" class="selected form-group" style="display:none">
                    <label for="dimension">Enter dimensions of product:</label>
                    <input type="number" step="0.01" name="height" placeholder="Height...">
                    <input type="number" step="0.01" name="width" placeholder="Width...">
                    <input type="number" step="0.01" name="length" placeholder="Lenght...">
                </div>
            </div>
            <hr>
        </form>
    </div>

    <script>

        // Simple function to choose which type to show to declare some info about staff
        function run()
        {
            var choose = document.getElementById("type").value;
            if (choose == 'size')
            {
                document.getElementById("sel-size").style.display = 'flex';
                document.getElementById("sel-weight").style.display = 'none';
                document.getElementById("sel-dimension").style.display = 'none';
            }else if(choose == 'weight')
            {
                document.getElementById("sel-size").style.display = 'none';
                document.getElementById("sel-weight").style.display = 'flex';
                document.getElementById("sel-dimension").style.display = 'none';
            }else if (choose == 'dimension')
            {
                document.getElementById("sel-size").style.display = 'none';
                document.getElementById("sel-weight").style.display = 'none';
                document.getElementById("sel-dimension").style.display = 'flex';
            }
        }
    </script>

</body>
</html>
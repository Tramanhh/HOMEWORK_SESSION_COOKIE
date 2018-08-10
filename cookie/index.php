<?php
include_once 'funtions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap 3.0.3 Documentation - BootstrapDocs</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
</div>

<div class="container">
    <div>
        <div class="container">
            <h2>List posts</h2>

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Product name</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                while ($products = $result->fetch_assoc()) {
                    ?>
                    <div class="post-preview col-lg-12">
                        <a href="<?php echo HOME_URL.'products.php?id='.$products['id']; ?>">
                            <class="product_name">
                                <?php echo $products['product_name'];?>
                                <?php echo '<br>';?>
                        </a>
                    </div>
                    <?php
                }
                ?>
                <h2>Product view</h2>
                <div>
                    <?php
                    if (isset($_COOKIE['product_visited']) && !empty($_COOKIE['product_visited'])) {
                        $product_visited = unserialize($_COOKIE['product_visited']);
                        $product_visited = (array)$product_visited;
                        echo "<pre>";
                        print_r($product_visited);
                        echo "</pre>";
                            ?>
                            <div class="post-preview col-lg-12">
                                <a href="<?php echo HOME_URL . 'products.php?id=' . $products['id']; ?>">
                                    <h2 class="post-title">
                                        <?php echo $products['product_name']; ?>
                                    </h2>
                                </a>
                            </div>
                            <?php
                    }
                    ?>
                </div>

                </tbody>

            </table>
        </div>
    </div>

</div><!-- /.container -->

</body>
</html>
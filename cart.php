<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php';

if (!isset($_SESSION['loginname']) || $_SESSION['loginname'] === "") {
    require "login.php";
    exit;
}

if (!$_SESSION["ProductIdToAdd"]) {
    require "index.php";
    exit;
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <section class="cookies container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <h3>Product(s) In Your Basket</h3>
                        <table>
                            <tr>
                                <td>Reference</td>

                                <td>Product Designation</td>

                                <td>Quantity</td>
                            </tr>
                            <?php foreach ($_SESSION["ProductIdToAdd"] as $id => $qty) { ?>
                                <tr>
                                    <td>
                                        <p><?= $id; ?></p>
                                    </td>
                                    <td>
                                        <p><?= $catalog[$id]['name']; ?></p>
                                    </td>
                                    <td>
                                        <p><?= $qty; ?></p>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </figure>
                </div>

            </div>
        </section>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
<?php //include '../ressources/views/layouts/head.tlp.php' ?>
<?php //include '../ressources/views/layouts/header.tlp.php' ?>
    <!--show.tlp-->
<?php //if(isset($_POST)){print_r($_POST);}?>
    <div class="d-flex p-2 justify-content-center" style="background-color: brown">
        nom du produit :<?= $productAsked['title']; ?>
    </div>
    <div class="d-flex flex-md-row flex-column p-5 justify-content-around mx-3  mt-1 " style="background-color: aqua">

        <img class="border border-primary" src="https://placehold.co/600x400" alt="mockup img"/>

        <div class="d-flex flex-column justify-content-between col-md-5 p-3 align-items-stretch"
             style="background-color: chartreuse">
            <div>
                description: <?= $productAsked['description']; ?>
            </div>
            <div>
                <p> prix HT: <?= $productAsked['price_HTT'] ?></p>
                <p> prix TTC: <?= $productAsked['priceTTC']; ?></p>
            </div>
            <div>
                <form class="d-flex flex-row p-5 justify-content-around mx-3  mt-5 " method="post"
                      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input class="btn btn-secondary" type="number" name="quantity">
                    <input class="btn btn-primary" type="submit" value="ajouter au panier"/>
                </form>
            </div>
        </div>
        <?php
        // define variables and set to empty values
        $quantity = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quantity = test_input($_POST["quantity"]);
        }


        ?>

    </div>

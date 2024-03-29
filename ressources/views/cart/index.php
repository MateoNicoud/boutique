<section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted">3 items</h6>
                                    </div>
                                    <hr class="my-4">
                                    <form method="post" action="/?action=modifiePanier">
                                        <?php foreach ($cart as $cartLigne): ?>
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img
                                                            src="https://placehold.co/150x150" alt="mockup img"
                                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">

                                                    <h6 class="text-black mb-0"><?= $cartLigne['title']; ?></h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                                    <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            type="submit"
                                                    >
                                                        <i class="fas fa-minus"></i>
                                                    </button>

                                                    <input id="form<?= (int)$cartLigne['id']; ?>" min="0"
                                                           name="<?= $cartLigne['id']; ?>"
                                                           value="<?= (int)$cartLigne['quantity']; ?>"
                                                           type="number"
                                                           class="form-control form-control-sm"/>

                                                    <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="fas fa-plus"></i>
                                                    </button>

                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button  class="btn-close" aria-label="Close" onclick="document.getElementById('form<?= (int)$cartLigne['id']; ?>').value=0"
                                                            type="submit" formaction="/?action=modifiePanier"></button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">€ <?= $cartLigne['priceTTC']; ?></h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>€ <?= $total; ?> </h5>
                                        </div>
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="index.php" class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                            </h6>
                                        </div>

                                        <button type="button" class="btn btn-primary">Modifier le panier
                                        </button>

                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

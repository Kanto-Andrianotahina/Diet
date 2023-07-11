    <!-- food_menu start-->
    <section class="food_menu gray_bg">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="section_tittle">
                        <p>Code d'achat</p>
                        <h2>Acheter des credits pour vos commandes</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active single-member" id="Special" role="tabpanel"
                            aria-labelledby="Special-tab">
                            <div class="row">
                                
                                <div class="col-sm-6 col-lg-6">
                                    <?php for ($i = 0; $i < count($codes) / 2; $i++) { ?>    
                                    <div class="single_food_item media rounded shadow-sm">
                                        <!-- <img src="img/food_menu/single_food_1.png" class="mr-3" alt="..."> -->
                                        <div class="d-flex justify-content-around media-body align-self-center p-4">
                                            <h3 class="mt-3"><?=$codes[$i]->get_num_code() ?></h3>
                                            <!-- <p>They're wherein heaven seed hath nothing</p> -->
                                            <h3 class="mt-3 text-danger"><?=$codes[$i]->get_price() ?> Ariary</h3>
                                            <!-- <button class="btn btn-dark">Choisir</button> -->
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                                <div class="col-sm-6 col-lg-6">
                                    
                                    <?php for ($i = count($codes) / 2; $i < count($codes); $i++) { ?>    
                                    <div class="single_food_item media rounded shadow-sm">
                                        <!-- <img src="img/food_menu/single_food_1.png" class="mr-3" alt="..."> -->
                                        <div class="d-flex justify-content-around media-body align-self-center p-4">
                                            <h3 class="mt-3"><?=$codes[$i]->get_num_code() ?></h3>
                                            <!-- <p>They're wherein heaven seed hath nothing</p> -->
                                            <h3 class="mt-3 text-danger"><?=$codes[$i]->get_price() ?> Ariary</h3>
                                            <!-- <button class="btn btn-dark">Choisir</button> -->
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-sm container mx-auto w-50 bg-white p-4 rounded">
            <form action="<?=base_url("demandController/demand") ?>" method="get">
                <input type="text" name="numero" class="form-control" placeholder="Numero">
                <input type="submit" class="btn btn-dark mt-3" value="Entrer">
            </form>
        </div>
    </section>
    <!-- food_menu part end-->
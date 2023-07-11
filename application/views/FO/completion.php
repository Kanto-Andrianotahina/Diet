<!-- food_menu start-->
<section class="food_menu gray_bg">
    <div class="w-50 container bg-light p-4 rounded shadow-sm">
        <form action="<?php echo base_url('UserController/addDetail') ?>" method="get">
            <input type="text" name="taille" class="form-control mb-4" placeholder="Taille">
            <input type="text" name="poids" class="form-control mb-4" placeholder="Poids">
                <?php if(isset($error)) { ?>
                    <p style="color: red;"> <?php echo $error; ?> , Mais veillez ressayer</p>
                <?php } ?>
            <input type="submit" value="Inserer" class="btn btn-dark">
        </form>
    </div>
</section>
<!-- food_menu part end-->
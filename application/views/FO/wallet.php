<section class="food_menu gray_bg">
<div class="container row mx-auto">
    <div class="col-md-6 w-50 bg-light p-4 shadow rounded">
    <h3>Transaction</h3>    
    <table class="table">
            <tr>
                <th>Date</th>
                <th>Numero</th>
                <th>Prix</th>
            </tr>
            <?php foreach ($wallet->get_wallets() as $wallet) { ?>
            <tr>
                <td><?=$wallet->get_date() ?></td>
                <td><?=$wallet->get_code()->get_num_code() ?></td>
                <td><?=$wallet->get_code()->get_price() ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    
    <div class="col-md-3 w-50 col-md-offset-2 bg-light p-4 shadow rounded" style="margin-left: 200px; height: 200px;">
        <h3>Montant Total de votre port-monnaie : </h3>
        <h2><?=$wallet->get_total() ?> Ariary</h2>
    </div>
</div>
</section>
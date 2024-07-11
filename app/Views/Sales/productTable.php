<div class="row m-0">
    <?php
    $i = 1;
    foreach ($products as $pc) {
    ?>

        <div class="col-md-4 ml-0">
            <div class="card" id="card_<?= $pc['id'] ?>" style="background-color: #efefef">
                <div class="card-body">
                    <input class="form-check-input" name="product_id[]" type="checkbox" onclick="$.toggle(<?= $pc['id'] ?>);" value="<?= $pc['id'] ?>" id="product_<?= $pc['id'] ?>" style="width: 20px; height:20px;">
                    <small class="fw-semibold mb-1">&nbsp;<?= $pc['product_name'] ?></small>
                </div>
                <img src="<?= base_url('public/uploads/products/') . $pc['product_image_1'] ?>" class="card-img" alt="...">
                <div class="card-body">
                    <div class="card-text mb-0">
                        <h6>Stock In Hand : <?= $pc['stock_in_hand'] ?></h6>

                        <div class="input-group mt-2">
                            <span class="input-group-text">Qty</span>
                            <input type="number" class="form-control" name="qty_<?= $pc['id'] ?>" id="qty_<?= $pc['id'] ?>" placeholder="Quantity" aria-label="Order Quantity" readonly onChange="$.showConfirm(<?= $pc['id'] ?>);">
                            <span class="input-group-text"><?= $pc['unit'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

</div>

<div class="col-md-7">
    <button type="submit" class="btn btn-primary mt-4">Add Selected Products</button>
</div>
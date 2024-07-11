<div class="row m-0">
    <?php
    $i = 1;
    foreach ($products as $pc) {
    ?>

        <div class="col-md-2 ml-0">
            <div class="card" id="card_<?= $pc['id'] ?>" style="background-color: #efefef">
                <div class="card-body">
                    <input class="form-check-input" name="product_id[]" type="checkbox" onclick="$.toggle(<?= $pc['id'] ?>);" value="<?= $pc['id'] ?>" id="product_<?= $pc['id'] ?>" style="width: 20px; height:20px;">
                    <small class="fw-semibold mb-1">&nbsp;<?= $pc['product_name'] ?></small>
                </div>
                <img src="<?= base_url('public/uploads/products/') . $pc['product_image_1'] ?>" class="card-img" alt="...">
                <div class="card-body">
                    <div class="card-text mb-0">
                        <h6>Stock In Hand : XX</h6>

                        <div class="input-group mt-2">
                            <span class="input-group-text">Qty</span>
                            <input type="text" class="form-control" name="qty_<?= $pc['id'] ?>" id="qty_<?= $pc['id'] ?>" placeholder="Quantity" aria-label="Order Quantity" readonly>
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
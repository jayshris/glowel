<table class="table table-borderless table-hover" id="ProductCategory">
    <thead>
        <tr>
            <th width="10%">Select</th>
            <th width="15%">Thumbnail</th>
            <th width="20%">Product Name</th>
            <th width="15%">Rate</th>
            <th width="10%">Unit</th>
            <th width="15%">Stock In Hand</th>
            <th width="15%">Order Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($products as $pc) { ?>
            <tr>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" name="product_id[]" type="checkbox" onclick="$.toggle(<?= $pc['id'] ?>);" value="<?= $pc['id'] ?>" id="product_<?= $pc['id'] ?>" style="width: 30px; height:30px;">
                    </div>
                </td>
                <td><a href="<?= base_url('public/uploads/products/') . $pc['product_image_1'] ?>" target="_blank"><img src="<?= base_url('public/uploads/products/') . $pc['product_image_1'] ?>" style="height: 60px;"></a> </td>
                <td><?= $pc['product_name'] ?></td>
                <td>
                    <input type="text" class="form-control" readonly name="rate_<?= $pc['id'] ?>" value="<?= $pc['rate'] ?>">
                </td>
                <td><?= $pc['measurement_unit'] ?></td>
                <td></td>
                <td>
                    <input type="text" class="form-control" name="qty_<?= $pc['id'] ?>" id="qty_<?= $pc['id'] ?>" placeholder="quantity" readonly>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="col-md-7">
    <button type="submit" class="btn btn-primary mt-4">Add Selected Products</button>
</div>
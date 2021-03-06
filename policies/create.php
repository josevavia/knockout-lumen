<?php ob_start(); ?>

<h1>Create new policy</h1>
<form data-bind="submit: createPolicy">

    <select class="form-control" data-bind="value: store_id,
                                            options: stores,
                                            optionsValue: 'id',
                                            optionsText: 'name'">
    </select>
    <select class="form-control" data-bind="value: product_id,
                                            options: products,
                                            optionsValue: 'id',
                                            optionsText: 'name',
                                            event: {change: updatePrice} ">
    </select>
    <select class="form-control" data-bind="value: product_category_id,
                                            options: product_categories,
                                            optionsValue: 'id',
                                            optionsText: 'name',
                                            event: {change: updatePrice} ">
    </select>
    <input type="text" id="name" class="form-control" required placeholder="NAME" data-bind="value: name" />
    <input type="text" id="email" class="form-control" required placeholder="EMAIL" data-bind="value: email" />
    <input type="text" id="phone_number" class="form-control" required placeholder="PHONE_NUMBER" data-bind="value: phone_number" />
    <input type="text" id="id_number" class="form-control" required placeholder="ID_NUMBER" data-bind="value: id_number" />
    <input type="text" id="periodicity" class="form-control" required placeholder="PERIODICITY" data-bind="value: periodicity" />
    <input type="text" id="imei" class="form-control" required placeholder="IMEI" data-bind="value: imei" />
    <input type="text" id="purchase_date" class="form-control" required placeholder="PURCHASE_DATE" data-bind="value: purchase_date" />
    <input type="text" id="purchase_price" class="form-control" required placeholder="PURCHASE_PRICE" data-bind="value: purchase_price" />
    <input type="text" id="model" class="form-control" required placeholder="MODEL" data-bind="value: model" />

    <input type="text" id="pan" class="form-control" required placeholder="PAN" data-bind="value: pan" />
    <input type="text" id="expiration" class="form-control" required placeholder="EXPIRATION" data-bind="value: expiration" />
    <input type="text" id="cvv2" class="form-control" required placeholder="CVV2" data-bind="value: cvv2" />

    <input type="text" id="discount_code" class="form-control" placeholder="DISCOUNT_CODE" data-bind="value: discount_code, event: {change: updatePrice}" />

    <br />

    <div data-bind="visible: price() != null">
        <br />
        Price: <div data-bind="text: price"></div>
    </div>


    <button class="btn btn-primary" type="submit">Save</button>
    <button class="btn btn-primary" type="button" data-bind="click: createPolicyAndPayTPV">Save and pay (TPV)</button>
    <button class="btn btn-primary" type="button" data-bind="click: createPolicyAndPayManual">Save and pay (Manual)</button>
</form>

<div id="divForm"></div>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/create.js"></script>


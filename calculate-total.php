﻿<?php 
    $total = 0;
    foreach ($_SESSION as $key=>$val){
    echo("<br>");
    echo("<br>");
    $product_id_number_without_p = substr($key, -6);    // returns "f"
    $name = return_info($conn, 'products', 'name', 'id', $product_id_number_without_p);
    $price = return_info($conn, 'products', 'price', 'id', $product_id_number_without_p);
    echo("
    <form action='load-page.php' method='post'>
    $name $price
        <button class='btn add-to-cart' name='remove_from_cart' type='submit'>
            <i class='fa fa-trash'></i>
            Remove from cart
       </button>
       <button class='btn add-to-cart' name='view_from_cart' type='submit'>
            <i class='fa fa-eye'></i>
            view from cart
        </button>
        <button class='btn add-to-cart' name='edit_from_cart' type='submit'>
            <i class='fa fa-edit'></i>
            edit from cart
        </button>
        <input type='hidden' name='id' value='$product_id_number_without_p'>
    </form>
    ");
    $total =+ $price;
    }

?>

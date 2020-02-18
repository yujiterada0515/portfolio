<?php
    require_once 'class/Item.php';
    $item = new Items();

    if (isset($_POST['enter'])) {
        $item_count = $_POST['number_of_items'];
    
        for ($i = 1; $i <= $item_count; $i++) {
            echo "
                <div class = 'card-footer'>
                    <form action='' method='post'>
                    <div class='row'>
                        <div class='form-group col-md-6'>
                            <label for='itemName'>Item Name</label>
                            <input type='text' name='item_name[]' id='inputItemName' class='form-control'>
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='itemPrice'>Item Price</label>
                            <input type='text' name='item_price[]' id='inputItemPrice' class='form-control'>
                        </div>
                        <div class='form-group col-md-3'>
                            <label for='itemPrice'>Item Quantity</label>
                            <input type='number' name='item_quantity[]' id='inputItemQuantity' class='form-control'>
                        </div>
                    </div>
                </div>
                ";
        }

        echo "
            <div class = 'card-footer'>
            <div class='row'>
                <div class='form-group col-md-3 mx-auto'>
                <input type='hidden' name='item_count' value='$item_count'>
                    <input type='submit' name='save' value='Save' class='form-control btn btn-primary'>
                </div>
            </div>
            </form>
            </div>
        </div>
        </div>
        ";
    }elseif(isset($_POST['save'])){
        $item_count = $_POST['item_count'];
        $item_name = $_POST['item_name'];
        $item_price = $_POST['item_price'];
        $item_quantity = $_POST['item_quantity'];

        $item->addItem($item_name, $item_price, $item_quantity,$item_count);
    }
?>
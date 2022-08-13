<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>

<style>
    html{
        text-align: center;
    }
    body {
        background-color: rgb(236, 204, 144);
        font-size: 150%;
    }
    h2{
        font-size: medium;
    }
    #total {
        font-size: large;
    }
</style>

<h1 style="text-align: center; color: green;"><u><strong>Food Truck Fanatic</u></strong></h1>
<h1 style="text-align: center; color: green;"><u><strong>Menu</u></strong></h1>
<br>
<h3 style="text-align:center; color: green;">Tacos</h3>
<table border="8"  align="center" style="color: green;">
    <th style="text-align: center;">Shrimp Taco $8</th>
    <th style="text-align: center;">Beef Taco $9</th>
    <tr>
        <td><img src="shrimpTaco.jpeg" height="300" width="300"/></td>
        <td> <img src="beefTaco.jpeg" height="300" width="300"/></td>
    </tr>
    <th style="text-align: center;">Chicken Taco $7</th>
    <th style="text-align: center;">Fish Taco $13</th>
    <tr>
        <td> <img src="chickenTaco.jpeg" height="300" width="300"/></td>
        <td> <img src="fishTaco.jpeg" height="300" width="300"/></td>
    </tr>
</table>

<h3 style="text-align:center; color: green;">Drinks</h3>
<table border="8" align="center" style="color: green;">
    <th style="text-align: center;">Tea $4</th>
    <th style="text-align: center;">Water Bottle $2</th>
    <tr>
        <td><img src="tea.jpeg" height="300" width="300"/></td>
        <td> <img src="water.jpeg" height="300" width="300"/></td>
    </tr>
    <th style="text-align: center;">Coke $5</th>
    <th style="text-align: center;">Dr. Pepper $5</th>
    <tr>
        <td> <img src="coke.jpeg" height="300" width="300"/></td>
        <td> <img src="pepper.jpeg" height="300" width="300"/></td>
    </tr>
    <th style="text-align: center;">Fanta $5</th>
    <th style="text-align: center;">Sprite $5</th>
    <tr>
        <td style="text-align: center;"> <img src="fanta.jpeg" height="300" width="300"/></td>
        <td style="text-align: center;"> <img src="sprite.jpeg" height="300" width="300"/></td>
    </tr>
</table>

<h2 style="color:coral;">(Please Select an Item & Drink along with the Quantity)</h2>
<?php
$total = 0;
$items = [];
$info  = 'Please select something to order.';

// form submitted
if( !empty( $_POST['choice'] ) && is_array( $_POST['choice'] ) )
{
    // loop all item choices
    foreach( $_POST['choice'] as $item )
    {
        // filter item info
        $name     = trim( $item['name'] );
        $price    = floatval( $item['price'] );
        $quantity = intval( $item['quantity'] );

        // only add if item was checked and quantity is more than 0
        if( isset( $item['checked'] ) && $quantity > 0 )
        {
            $items[] = $quantity .' '. $name;
            $total  += $price * $quantity;
        }
    }
    // update info if items were selected
    if( count( $items ) )
    {
        $info = '<span style="font-size: 20px; color: red;"> ' . 'You have selected ('.implode( ', ', $items ).'), for a total of: <br>$'.$total . ' </span>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
    <meta charset="utf-8" />
</head>
<body>
        <form id="order-form" style="color: green; font-size:150%" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-item">
            <input type="checkbox" name="choice[0][checked]" />
            <span>Shrimp Tacos, Price: $8</span>
            <input type="number" name="choice[0][quantity]" value="1" />
            <input type="hidden" name="choice[0][price]" value="8" />
            <input type="hidden" name="choice[0][name]" value="Shrimp Tacos" />
        </div>  
        <div class="form-item">
            <input type="checkbox" name="choice[1][checked]" />
            <span>Beef Tacos, Price: $9</span>
            <input type="number" name="choice[1][quantity]" value="1" />
            <input type="hidden" name="choice[1][price]" value="9" />
            <input type="hidden" name="choice[1][name]" value="Beef Tacos" />
        </div>
        <div class="form-item">
            <input type="checkbox" name="choice[2][checked]" />
            <span>Chicken Tacos, Price: $7</span>
            <input type="number" name="choice[2][quantity]" value="1" />
            <input type="hidden" name="choice[2][price]" value="7" />
            <input type="hidden" name="choice[2][name]" value="Chicken Tacos" />
        </div>
        <div class="form-item">
            <input type="checkbox" name="choice[3][checked]" />
            <span>Fish Tacos, Price: $13</span>
            <input type="number" name="choice[3][quantity]" value="1" />
            <input type="hidden" name="choice[3][price]" value="13" />
            <input type="hidden" name="choice[3][name]" value="Fish Tacos" />
        </div>
        <br>
        <div class="form-item">
            <input type="checkbox" name="choice[4][checked]" />
            <span>Tea, Price: $4</span>
            <input type="number" name="choice[4][quantity]" value="1" />
            <input type="hidden" name="choice[4][price]" value="4" />
            <input type="hidden" name="choice[4][name]" value="Tea" />
        </div>
        <div class="form-item">
            <input type="checkbox" name="choice[5][checked]" />
            <span>Water Bottle, Price: $2</span>
            <input type="number" name="choice[5][quantity]" value="1" />
            <input type="hidden" name="choice[5][price]" value="2" />
            <input type="hidden" name="choice[5][name]" value="Water Bottle" />
        </div>
        <div class="form-item">
            <input type="checkbox" name="choice[5][checked]" />
            <span>Coke, Price: $5</span>
            <input type="number" name="choice[5][quantity]" value="1" />
            <input type="hidden" name="choice[5][price]" value="5" />
            <input type="hidden" name="choice[5][name]" value="Coke" />
        </div>
        <div class="form-item">
            <input type="checkbox" name="choice[5][checked]" />
            <span>Dr. Pepper, Price: $5</span>
            <input type="number" name="choice[5][quantity]" value="1" />
            <input type="hidden" name="choice[5][price]" value="5" />
            <input type="hidden" name="choice[5][name]" value="Dr. Pepper" />
        </div>
        <div class="form-item">
            <input type="checkbox" name="choice[5][checked]" />
            <span>Fanta, Price: $5</span>
            <input type="number" name="choice[5][quantity]" value="1" />
            <input type="hidden" name="choice[5][price]" value="5" />
            <input type="hidden" name="choice[5][name]" value="Fanta" />
        </div>
        <div class="form-item">
            <input type="checkbox" name="choice[5][checked]" />
            <span>Sprite, Price: $5</span>
            <input type="number" name="choice[5][quantity]" value="1" />
            <input type="hidden" name="choice[5][price]" value="5" />
            <input type="hidden" name="choice[5][name]" value="Sprite" />
        </div>
        <br>
        <input style="color: rgb(236, 204, 144); background-color: green;" type="submit" value="Order"/>
    </form>
    

    <hr />
    <p><?= $info ?></p>

</body>
</html>

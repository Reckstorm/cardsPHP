<?php
include 'Card.php';

echo '<link href="style.css" rel="stylesheet">';
echo '<div class="flex">
        <form class="input-form" action="inputCard.php" method="post">
            <label class="form-label"> Select card type:
            <br>
            <select name="cardType">
                <option value="1">Card with a title only</option>
                <option value="2" selected>Regular card</option>
                <option value="3">Card with a phone number</option>
                <option value="4">Card with a bg colour</option>
            </select>
            </label>
        <div class="mt">
            <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary">
        </div>
        </form>
</div>';
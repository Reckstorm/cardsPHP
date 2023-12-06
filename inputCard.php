<?php

if (isset($_POST["cardType"])) {
    echo '<link href="style.css" rel="stylesheet">';
    if ($_POST["cardType"] == "1") echo BaseCardView();
    elseif ($_POST["cardType"] == "2") echo CardView();
    elseif ($_POST["cardType"] == "3") echo CardWithPhoneView();
    elseif ($_POST["cardType"] == "4") echo CardWithBGColorView();
} else {
    echo '<p>Invalid card type</p>';
}

function CardWithPhoneView()
{
    return
        '<div class="flex mt" >
<form class="input-form" action="cardsPage.php" method="post">
    <div class="form-container">
        <div class="mt">
            <label class="form-label"> Title:
            <br>
            <input class="form-control" type="text" name="cardData[title]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Text:
            <br>
            <input class="form-control" type="text" name="cardData[text]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Phone:
            <br>
            <input class="form-control" type="tel" name="cardData[phone]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Date:
            <br>
            <input class="form-control" type="date" name="cardData[date]" required>
        </label>
        </div>
        <div class="mt">
            <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary">
        </div>
    </div>
    </form>
    </div>';
}

function CardView()
{
    return
        '<div class="flex mt" >
<form class="input-form" action="cardsPage.php" method="post">
    <div class="form-container">
        <div>
            <label class="form-label"> Title:
            <br>
            <input class="form-control" type="text" name="cardData[title]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Text:
            <br>
            <input class="form-control" type="text" name="cardData[text]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Date:
            <br>
            <input class="form-control" type="date" name="cardData[date]" required>
        </label>
        </div>
        <div class="mt">
            <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary">
        </div>
    </div>
    </form>
    </div>';
}

function CardWithBGColorView()
{
    return
        '<div class="flex mt" >
<form class="input-form" action="cardsPage.php" method="post">
    <div class="form-container">
        <div>
            <label class="form-label"> Title:
            <br>
            <input class="form-control" type="text" name="cardData[title]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Text:
            <br>
            <input class="form-control" type="text" name="cardData[text]" required>
        </label>
        </div>
        <div class="mt">
            <label class="form-label"> Date:
            <br>
            <input class="form-control" type="date" name="cardData[date]" required>
        </label>
        </div>
         <div class="mt">
            <label class="form-label"> Colour:
            <br>
            <input class="form-control" type="color" name="cardData[bgcolor]" required>
        </label>
        </div>
        <div class="mt">
            <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary">
        </div>
    </div>
    </form>
    </div>';
}

function BaseCardView()
{
    return
        '<div class="flex mt" >
<form class="input-form" action="cardsPage.php" method="post">
    <div class="form-container">
        <div>
            <label class="form-label"> Title:
            <br>
            <input class="form-control" type="text" name="cardData[title]" required>
        </label>
        </div>
        <div class="mt">
            <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary">
        </div>
    </div>
    </form>
    </div>';
}
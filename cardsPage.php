<?php
include 'Card.php';
include 'CardWithBGColor.php';
include 'CardWithPhone.php';
echo '<link href="style.css" rel="stylesheet">';

$cards = [];
$tmp = [];
$cardsFile = fopen("cards.json", "r") or die("FAILURE");
$tmp = json_decode(fgets($cardsFile));
fclose($cardsFile);

if ($tmp)
{
    foreach ($tmp as $card)
    {
        if (!isset($card->Text)) $cards[] = new BaseCard($card->Title);
        elseif (!isset($card->Phone) && !isset($card->BGColor)) $cards[] = new Card($card->Title, $card->Text, $card->Date);
        elseif (isset($card->Phone)) $cards[] = new CardWithPhone($card->Title, $card->Text, $card->Date, $card->Phone);
        elseif (isset($card->BGColor)) $cards[] = new CardWithBGColor($card->Title, $card->Text, $card->Date, $card->BGColor);
    }
}

//var_dump($cards);
//echo "<br>";
//var_dump(json_encode($cards));

if (isset($_POST["cardData"])) {
    $tmp = $_POST["cardData"];
    if (!isset($tmp["text"])) $cards[] = new BaseCard($tmp["title"]);
    elseif (!isset($tmp["phone"]) && !isset($tmp["bgcolor"])) $cards[] = new Card($tmp["title"], $tmp["text"], $tmp["date"]);
    elseif (isset($tmp["phone"])) $cards[] = new CardWithPhone($tmp["title"], $tmp["text"], $tmp["date"], $tmp["phone"]);
    elseif (isset($tmp["bgcolor"])) $cards[] = new CardWithBGColor($tmp["title"], $tmp["text"], $tmp["date"], $tmp["bgcolor"]);
}
echo '<div class="container">';
for ($i = 0; $i < count($cards); $i++) {
    if (get_class($cards[$i]) == "BaseCard"){
        $title = $cards[$i]->getTitle();
        echo
            "<div class='card'>
            <h3>Title: $title</h3>
            </div>";
    }
    elseif (get_class($cards[$i]) == "Card"){
        $title = $cards[$i]->getTitle();
        $text = $cards[$i]->getText();
        $time = $cards[$i]->getDate();
        echo "
        <div class='card'>
        <h3>Title: $title</h3>
        <div>Text: $text</div>
        <div>Created: $time</div>
        </div>";
    }
    elseif (get_class($cards[$i]) == "CardWithPhone"){
        $title = $cards[$i]->getTitle();
        $text = $cards[$i]->getText();
        $phone = $cards[$i]->getPhone();
        $time = $cards[$i]->getDate();
        echo "
        <div class='card'>
        <h3>Title: $title</h3>
        <div>Text: $text</div>
        <div>Phone: $phone</div>
        <div>Created: $time</div>
        </div>";
    }
    elseif (get_class($cards[$i]) == "CardWithBGColor"){
        $title = $cards[$i]->getTitle();
        $text = $cards[$i]->getText();
        $color = $cards[$i]->getBGColor();
        $time = $cards[$i]->getDate();
        echo "
        <div class='card' style='background-color:".$color."'>
        <h3>Title: $title</h3>
        <div>Text: $text</div>
        <div>Created: $time</div>
        </div>";
    }
}
echo '</div>';

//var_dump(json_encode($cards));

$tmpFile = fopen("cards.json", "w") or die("FAILURE");
fwrite($tmpFile, json_encode($cards));
fclose($tmpFile);
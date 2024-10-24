<?php
$baseUrl = "https://localhost/company-projects/solana/";
$functions = basename($_SERVER['PHP_SELF']);
switch ($functions) {
    case "index.php";
        $title_name = "Solana Meme Coin";
        $description = "Solana Meme Coin";
        $url = $baseUrl;
        $indexfollow = "index, follow";
        break;
    case "product.php";
        $title_name = "Product | Solana Meme Coin";
        $description = "Solana Meme Coin";
        $url = $baseUrl;
        $indexfollow = "index, follow";
        break;
}
?>
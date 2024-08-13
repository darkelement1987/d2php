<?php
ini_set('memory_limit', '1024M'); // Increase memory limit

require_once 'Destiny2API.php';

try {
    // Initialize the Destiny 2 API wrapper
    $api = new Destiny2API();

    // Example: Search for a Destiny player
    $membershipType = 3; // 1 for Xbox, 2 for PSN, 3 for Steam
    $displayName = 'YourPlayerName';
    $player = $api->searchDestinyPlayer($membershipType, $displayName);
    echo "<h2>Player Search Result</h2>";
    echo "<pre>";
    print_r($player);
    echo "</pre>";

    // Example: Get player profile with limited components to reduce memory usage
    $destinyMembershipId = 'YourMembershipID';
    $components = [100]; // Basic profile information only
    $profile = $api->getProfile($membershipType, $destinyMembershipId, $components);
    echo "<h2>Player Profile</h2>";
    echo "<pre>";
    print_r($profile);
    echo "</pre>";

    // Example: Get inventory item by hash
    $itemHash = 2575506895;
    $item = $api->getInventoryItem($itemHash);
    echo "<h2>Inventory Item</h2>";
    echo "<pre>";
    print_r($item);
    echo "</pre>";

} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

====================
 Destiny 2 API Wrapper
====================

This PHP wrapper allows you to interact with Bungie's Destiny 2 API. It provides easy-to-use methods to access various Destiny 2 endpoints such as player profiles, inventory items, and more.

====================
 REQUIREMENTS
====================
- PHP 7.4 or higher
- cURL extension enabled
- An active Bungie API key

====================
 INSTALLATION
====================
1. Copy the wrapper files to your server.
2. Set up your API key in the config.php file:
   - Open config.php
   - Replace YOUR_API_KEY with your Bungie API key.

====================
 USAGE
====================
1. Include the wrapper in your project:
   require_once 'Destiny2API.php';

2. Initialize the wrapper:
   $api = new Destiny2API();

3. Use the various methods provided to interact with the Destiny 2 API.

====================
 EXAMPLES
====================
1. Search for a Player:
   $membershipType = 3; // Steam
   $displayName = 'PlayerName';
   $player = $api->searchDestinyPlayer($membershipType, $displayName);
   print_r($player);

2. Get Player Profile:
   $destinyMembershipId = '12345678';
   $components = [100]; // Basic profile info
   $profile = $api->getProfile($membershipType, $destinyMembershipId, $components);
   print_r($profile);

3. Get Inventory Item by Hash:
   $itemHash = 2575506895;
   $item = $api->getInventoryItem($itemHash);
   print_r($item);

====================
 ENDPOINTS
====================
The wrapper supports all Destiny 2 API endpoints. Below are some examples:

- searchDestinyPlayer($membershipType, $displayName) - Search for a Destiny 2 player.
- getProfile($membershipType, $destinyMembershipId, $components) - Get detailed player profile.
- getInventoryItem($itemHash) - Fetch details about an inventory item.
- And more, as described in the Bungie API documentation.

====================
 ERROR HANDLING
====================
Errors encountered during API calls will throw exceptions. You can handle these using try-catch blocks:

try {
    // Your API calls here
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

====================
 TROUBLESHOOTING
====================
- Memory Exhaustion: Increase your memory limit in php.ini or via ini_set() if you encounter memory issues.
- API Key Issues: Ensure your API key is valid and correctly set in config.php.
- Rate Limits: Be mindful of Bungie's rate limits; avoid making too many requests in a short period.

====================
 LICENSE
====================
This project is licensed under the MIT License. See the LICENSE file for more details.

====================
 SUPPORT
====================
For support, please refer to the official Bungie API documentation at:
https://bungie-net.github.io/

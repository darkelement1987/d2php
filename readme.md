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

PHP Error: [2] Array to string conversion in C:\xampp2\htdocs\destiny\index.php on line 78

Error: Unable to fetch data from API.
cURL Error: Could not resolve host: www.bungie.netArray

PHP Error: [2] Array to string conversion in C:\xampp2\htdocs\destiny\index.php on line 79

Error: Unable to fetch data from API.
cURL Error: Could not resolve host: www.bungie.netArray

Manifest Data: Array
(
    [Response] => Array
        (
            [version] => 226893.24.07.17.1731-2-bnet.56363
            [mobileAssetContentPath] => /common/destiny2_content/sqlite/asset/asset_sql_content_39c8cb952ff2c328496530ab75df2d30.content
            [mobileGearAssetDataBases] => Array
                (
                    [0] => Array
                        (
                            [version] => 0
                            [path] => /common/destiny2_content/sqlite/asset/asset_sql_content_39c8cb952ff2c328496530ab75df2d30.content
                        )

                    [1] => Array
                        (
                            [version] => 1
                            [path] => /common/destiny2_content/sqlite/asset/asset_sql_content_2302190b249e400cd322e64f3ce06490.content
                        )

                    [2] => Array
                        (
                            [version] => 2
                            [path] => /common/destiny2_content/sqlite/asset/asset_sql_content_2302190b249e400cd322e64f3ce06490.content
                        )

                )

            [mobileWorldContentPaths] => Array
                (
                    [en] => /common/destiny2_content/sqlite/en/world_sql_content_0e5d5f3048975000dbca5cc59d8f3f79.content
                    [fr] => /common/destiny2_content/sqlite/fr/world_sql_content_c0307b1cb742c28e770eaf0724ca9abb.content
                    [es] => /common/destiny2_content/sqlite/es/world_sql_content_bb0f9ca3669042c27aa13e9aa550c94c.content
                    [es-mx] => /common/destiny2_content/sqlite/es-mx/world_sql_content_bd907b5cfb1326c11d542253c0f871da.content
                    [de] => /common/destiny2_content/sqlite/de/world_sql_content_efeaec390fecb9beb7fd80e660424df1.content
                    [it] => /common/destiny2_content/sqlite/it/world_sql_content_aa2e4b6adbb23efd4c51d1e9193f7bcc.content
                    [ja] => /common/destiny2_content/sqlite/ja/world_sql_content_248a40baefff82565283e7b0eae8a5dc.content
                    [pt-br] => /common/destiny2_content/sqlite/pt-br/world_sql_content_b700a2768c81832cfa43c3ea64e1f40b.content
                    [ru] => /common/destiny2_content/sqlite/ru/world_sql_content_9853f3a6e799ef57dfae28d838d868ce.content
                    [pl] => /common/destiny2_content/sqlite/pl/world_sql_content_55f77d1208364d2b445e7eda0bc4dff4.content
                    [ko] => /common/destiny2_content/sqlite/ko/world_sql_content_ba993e041a0d846a4c8231b2e7898fd3.content
                    [zh-cht] => /common/destiny2_content/sqlite/zh-cht/world_sql_content_2c84c0949c4360e25b9d8a6b0629c05f.content
                    [zh-chs] => /common/destiny2_content/sqlite/zh-chs/world_sql_content_d79649e38e513bb3fb5689a36a1081dc.content
                )

            [jsonWorldContentPaths] => Array
                (
                    [en] => /common/destiny2_content/json/en/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [fr] => /common/destiny2_content/json/fr/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [es] => /common/destiny2_content/json/es/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [es-mx] => /common/destiny2_content/json/es-mx/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [de] => /common/destiny2_content/json/de/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [it] => /common/destiny2_content/json/it/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [ja] => /common/destiny2_content/json/ja/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [pt-br] => /common/destiny2_content/json/pt-br/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [ru] => /common/destiny2_content/json/ru/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [pl] => /common/destiny2_content/json/pl/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [ko] => /common/destiny2_content/json/ko/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [zh-cht] => /common/destiny2_content/json/zh-cht/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                    [zh-chs] => /common/destiny2_content/json/zh-chs/aggregate-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                )

            [jsonWorldComponentContentPaths] => Array
                (
                    [en] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/en/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/en/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/en/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/en/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/en/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/en/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/en/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/en/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/en/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/en/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/en/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/en/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/en/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/en/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/en/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/en/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/en/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/en/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/en/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/en/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/en/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/en/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/en/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/en/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/en/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/en/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/en/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/en/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/en/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/en/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/en/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/en/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/en/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/en/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/en/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/en/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/en/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/en/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/en/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/en/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/en/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/en/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/en/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/en/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/en/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/en/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/en/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/en/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/en/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/en/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/en/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/en/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/en/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/en/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/en/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/en/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/en/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/en/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/en/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/en/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/en/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/en/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/en/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/en/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/en/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/en/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/en/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/en/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/en/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/en/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/en/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/en/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/en/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/en/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/en/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/en/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/en/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/en/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/en/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/en/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/en/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/en/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/en/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/en/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/en/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/en/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/en/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/en/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [fr] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/fr/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/fr/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/fr/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/fr/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/fr/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/fr/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/fr/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/fr/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/fr/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/fr/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/fr/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/fr/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/fr/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/fr/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/fr/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/fr/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/fr/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/fr/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/fr/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/fr/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/fr/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/fr/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/fr/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/fr/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/fr/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/fr/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/fr/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/fr/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/fr/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/fr/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/fr/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/fr/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/fr/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/fr/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/fr/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/fr/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/fr/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/fr/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/fr/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/fr/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/fr/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/fr/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/fr/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/fr/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/fr/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/fr/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/fr/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/fr/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/fr/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/fr/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/fr/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/fr/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/fr/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/fr/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/fr/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/fr/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/fr/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/fr/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/fr/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/fr/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/fr/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/fr/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/fr/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/fr/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/fr/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/fr/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/fr/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/fr/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/fr/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/fr/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/fr/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/fr/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/fr/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/fr/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/fr/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/fr/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/fr/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/fr/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/fr/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/fr/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/fr/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/fr/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/fr/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/fr/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/fr/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/fr/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/fr/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/fr/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [es] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/es/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/es/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/es/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/es/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/es/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/es/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/es/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/es/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/es/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/es/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/es/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/es/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/es/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/es/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/es/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/es/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/es/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/es/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/es/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/es/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/es/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/es/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/es/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/es/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/es/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/es/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/es/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/es/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/es/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/es/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/es/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/es/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/es/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/es/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/es/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/es/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/es/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/es/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/es/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/es/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/es/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/es/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/es/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/es/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/es/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/es/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/es/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/es/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/es/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/es/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/es/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/es/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/es/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/es/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/es/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/es/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/es/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/es/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/es/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/es/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/es/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/es/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/es/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/es/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/es/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/es/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/es/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/es/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/es/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/es/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/es/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/es/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/es/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/es/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/es/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/es/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/es/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/es/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/es/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/es/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/es/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/es/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/es/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/es/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/es/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/es/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/es/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/es/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [es-mx] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/es-mx/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/es-mx/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/es-mx/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/es-mx/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/es-mx/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/es-mx/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/es-mx/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/es-mx/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/es-mx/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/es-mx/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/es-mx/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/es-mx/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/es-mx/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/es-mx/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/es-mx/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/es-mx/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/es-mx/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/es-mx/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/es-mx/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/es-mx/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/es-mx/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/es-mx/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/es-mx/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/es-mx/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/es-mx/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/es-mx/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/es-mx/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/es-mx/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/es-mx/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/es-mx/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/es-mx/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/es-mx/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/es-mx/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/es-mx/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/es-mx/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/es-mx/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/es-mx/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/es-mx/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/es-mx/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/es-mx/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/es-mx/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/es-mx/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/es-mx/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/es-mx/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/es-mx/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/es-mx/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/es-mx/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/es-mx/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/es-mx/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/es-mx/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/es-mx/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/es-mx/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/es-mx/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/es-mx/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/es-mx/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/es-mx/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/es-mx/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/es-mx/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/es-mx/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/es-mx/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/es-mx/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/es-mx/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/es-mx/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/es-mx/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/es-mx/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/es-mx/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/es-mx/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/es-mx/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/es-mx/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/es-mx/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/es-mx/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/es-mx/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/es-mx/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/es-mx/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/es-mx/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/es-mx/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/es-mx/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/es-mx/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/es-mx/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/es-mx/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/es-mx/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/es-mx/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/es-mx/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/es-mx/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/es-mx/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/es-mx/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/es-mx/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/es-mx/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [de] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/de/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/de/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/de/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/de/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/de/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/de/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/de/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/de/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/de/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/de/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/de/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/de/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/de/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/de/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/de/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/de/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/de/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/de/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/de/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/de/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/de/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/de/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/de/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/de/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/de/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/de/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/de/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/de/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/de/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/de/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/de/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/de/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/de/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/de/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/de/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/de/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/de/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/de/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/de/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/de/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/de/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/de/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/de/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/de/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/de/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/de/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/de/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/de/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/de/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/de/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/de/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/de/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/de/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/de/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/de/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/de/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/de/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/de/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/de/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/de/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/de/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/de/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/de/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/de/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/de/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/de/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/de/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/de/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/de/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/de/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/de/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/de/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/de/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/de/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/de/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/de/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/de/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/de/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/de/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/de/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/de/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/de/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/de/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/de/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/de/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/de/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/de/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/de/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [it] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/it/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/it/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/it/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/it/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/it/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/it/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/it/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/it/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/it/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/it/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/it/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/it/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/it/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/it/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/it/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/it/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/it/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/it/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/it/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/it/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/it/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/it/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/it/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/it/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/it/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/it/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/it/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/it/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/it/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/it/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/it/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/it/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/it/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/it/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/it/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/it/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/it/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/it/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/it/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/it/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/it/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/it/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/it/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/it/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/it/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/it/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/it/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/it/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/it/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/it/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/it/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/it/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/it/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/it/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/it/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/it/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/it/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/it/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/it/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/it/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/it/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/it/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/it/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/it/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/it/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/it/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/it/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/it/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/it/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/it/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/it/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/it/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/it/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/it/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/it/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/it/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/it/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/it/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/it/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/it/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/it/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/it/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/it/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/it/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/it/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/it/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/it/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/it/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [ja] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/ja/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/ja/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/ja/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/ja/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/ja/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/ja/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/ja/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/ja/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/ja/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/ja/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/ja/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/ja/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/ja/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/ja/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/ja/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/ja/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/ja/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/ja/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/ja/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/ja/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/ja/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/ja/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/ja/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/ja/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/ja/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/ja/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/ja/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/ja/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/ja/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/ja/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/ja/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/ja/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/ja/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/ja/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/ja/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/ja/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/ja/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/ja/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/ja/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/ja/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/ja/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/ja/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/ja/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/ja/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/ja/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/ja/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/ja/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/ja/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/ja/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/ja/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/ja/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/ja/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/ja/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/ja/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/ja/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/ja/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/ja/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/ja/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/ja/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/ja/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/ja/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/ja/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/ja/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/ja/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/ja/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/ja/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/ja/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/ja/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/ja/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/ja/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/ja/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/ja/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/ja/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/ja/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/ja/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/ja/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/ja/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/ja/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/ja/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/ja/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/ja/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/ja/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/ja/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/ja/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/ja/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/ja/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/ja/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/ja/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [pt-br] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/pt-br/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/pt-br/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/pt-br/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/pt-br/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/pt-br/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/pt-br/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/pt-br/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/pt-br/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/pt-br/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/pt-br/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/pt-br/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/pt-br/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/pt-br/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/pt-br/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/pt-br/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/pt-br/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/pt-br/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/pt-br/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/pt-br/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/pt-br/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/pt-br/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/pt-br/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/pt-br/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/pt-br/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/pt-br/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/pt-br/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/pt-br/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/pt-br/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/pt-br/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/pt-br/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/pt-br/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/pt-br/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/pt-br/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/pt-br/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/pt-br/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/pt-br/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/pt-br/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/pt-br/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/pt-br/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/pt-br/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/pt-br/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/pt-br/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/pt-br/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/pt-br/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/pt-br/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/pt-br/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/pt-br/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/pt-br/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/pt-br/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/pt-br/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/pt-br/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/pt-br/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/pt-br/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/pt-br/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/pt-br/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/pt-br/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/pt-br/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/pt-br/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/pt-br/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/pt-br/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/pt-br/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/pt-br/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/pt-br/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/pt-br/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/pt-br/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/pt-br/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/pt-br/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/pt-br/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/pt-br/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/pt-br/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/pt-br/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/pt-br/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/pt-br/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/pt-br/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/pt-br/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/pt-br/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/pt-br/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/pt-br/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/pt-br/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/pt-br/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/pt-br/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/pt-br/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/pt-br/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/pt-br/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/pt-br/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/pt-br/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/pt-br/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/pt-br/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [ru] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/ru/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/ru/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/ru/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/ru/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/ru/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/ru/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/ru/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/ru/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/ru/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/ru/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/ru/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/ru/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/ru/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/ru/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/ru/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/ru/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/ru/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/ru/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/ru/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/ru/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/ru/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/ru/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/ru/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/ru/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/ru/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/ru/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/ru/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/ru/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/ru/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/ru/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/ru/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/ru/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/ru/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/ru/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/ru/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/ru/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/ru/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/ru/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/ru/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/ru/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/ru/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/ru/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/ru/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/ru/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/ru/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/ru/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/ru/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/ru/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/ru/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/ru/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/ru/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/ru/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/ru/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/ru/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/ru/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/ru/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/ru/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/ru/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/ru/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/ru/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/ru/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/ru/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/ru/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/ru/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/ru/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/ru/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/ru/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/ru/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/ru/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/ru/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/ru/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/ru/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/ru/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/ru/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/ru/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/ru/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/ru/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/ru/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/ru/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/ru/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/ru/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/ru/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/ru/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/ru/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/ru/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/ru/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/ru/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/ru/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [pl] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/pl/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/pl/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/pl/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/pl/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/pl/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/pl/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/pl/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/pl/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/pl/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/pl/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/pl/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/pl/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/pl/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/pl/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/pl/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/pl/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/pl/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/pl/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/pl/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/pl/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/pl/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/pl/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/pl/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/pl/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/pl/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/pl/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/pl/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/pl/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/pl/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/pl/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/pl/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/pl/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/pl/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/pl/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/pl/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/pl/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/pl/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/pl/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/pl/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/pl/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/pl/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/pl/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/pl/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/pl/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/pl/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/pl/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/pl/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/pl/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/pl/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/pl/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/pl/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/pl/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/pl/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/pl/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/pl/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/pl/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/pl/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/pl/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/pl/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/pl/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/pl/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/pl/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/pl/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/pl/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/pl/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/pl/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/pl/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/pl/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/pl/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/pl/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/pl/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/pl/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/pl/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/pl/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/pl/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/pl/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/pl/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/pl/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/pl/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/pl/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/pl/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/pl/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/pl/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/pl/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/pl/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/pl/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/pl/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/pl/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [ko] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/ko/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/ko/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/ko/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/ko/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/ko/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/ko/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/ko/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/ko/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/ko/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/ko/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/ko/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/ko/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/ko/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/ko/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/ko/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/ko/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/ko/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/ko/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/ko/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/ko/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/ko/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/ko/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/ko/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/ko/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/ko/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/ko/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/ko/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/ko/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/ko/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/ko/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/ko/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/ko/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/ko/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/ko/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/ko/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/ko/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/ko/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/ko/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/ko/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/ko/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/ko/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/ko/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/ko/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/ko/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/ko/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/ko/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/ko/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/ko/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/ko/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/ko/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/ko/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/ko/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/ko/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/ko/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/ko/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/ko/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/ko/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/ko/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/ko/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/ko/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/ko/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/ko/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/ko/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/ko/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/ko/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/ko/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/ko/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/ko/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/ko/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/ko/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/ko/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/ko/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/ko/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/ko/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/ko/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/ko/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/ko/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/ko/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/ko/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/ko/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/ko/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/ko/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/ko/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/ko/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/ko/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/ko/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/ko/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/ko/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [zh-cht] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/zh-cht/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/zh-cht/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/zh-cht/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/zh-cht/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/zh-cht/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/zh-cht/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/zh-cht/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/zh-cht/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/zh-cht/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/zh-cht/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/zh-cht/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/zh-cht/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/zh-cht/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/zh-cht/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/zh-cht/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/zh-cht/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/zh-cht/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/zh-cht/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/zh-cht/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/zh-cht/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/zh-cht/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/zh-cht/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/zh-cht/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/zh-cht/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/zh-cht/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/zh-cht/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/zh-cht/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/zh-cht/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/zh-cht/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/zh-cht/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/zh-cht/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/zh-cht/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/zh-cht/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/zh-cht/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/zh-cht/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/zh-cht/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/zh-cht/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/zh-cht/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/zh-cht/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/zh-cht/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/zh-cht/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/zh-cht/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/zh-cht/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/zh-cht/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/zh-cht/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/zh-cht/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/zh-cht/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/zh-cht/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/zh-cht/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/zh-cht/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/zh-cht/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/zh-cht/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/zh-cht/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/zh-cht/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/zh-cht/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/zh-cht/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/zh-cht/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/zh-cht/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/zh-cht/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/zh-cht/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/zh-cht/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/zh-cht/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/zh-cht/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/zh-cht/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/zh-cht/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/zh-cht/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/zh-cht/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/zh-cht/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/zh-cht/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/zh-cht/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/zh-cht/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/zh-cht/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/zh-cht/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/zh-cht/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/zh-cht/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/zh-cht/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/zh-cht/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/zh-cht/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/zh-cht/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/zh-cht/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/zh-cht/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/zh-cht/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/zh-cht/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/zh-cht/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/zh-cht/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/zh-cht/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/zh-cht/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/zh-cht/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                    [zh-chs] => Array
                        (
                            [DestinyNodeStepSummaryDefinition] => /common/destiny2_content/json/zh-chs/DestinyNodeStepSummaryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeChannelDefinition] => /common/destiny2_content/json/zh-chs/DestinyArtDyeChannelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtDyeReferenceDefinition] => /common/destiny2_content/json/zh-chs/DestinyArtDyeReferenceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlaceDefinition] => /common/destiny2_content/json/zh-chs/DestinyPlaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityDefinition] => /common/destiny2_content/json/zh-chs/DestinyActivityDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityTypeDefinition] => /common/destiny2_content/json/zh-chs/DestinyActivityTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyClassDefinition] => /common/destiny2_content/json/zh-chs/DestinyClassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGenderDefinition] => /common/destiny2_content/json/zh-chs/DestinyGenderDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryBucketDefinition] => /common/destiny2_content/json/zh-chs/DestinyInventoryBucketDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRaceDefinition] => /common/destiny2_content/json/zh-chs/DestinyRaceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTalentGridDefinition] => /common/destiny2_content/json/zh-chs/DestinyTalentGridDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockDefinition] => /common/destiny2_content/json/zh-chs/DestinyUnlockDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatGroupDefinition] => /common/destiny2_content/json/zh-chs/DestinyStatGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionMappingDefinition] => /common/destiny2_content/json/zh-chs/DestinyProgressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFactionDefinition] => /common/destiny2_content/json/zh-chs/DestinyFactionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorGroupDefinition] => /common/destiny2_content/json/zh-chs/DestinyVendorGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSourceDefinition] => /common/destiny2_content/json/zh-chs/DestinyRewardSourceDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockValueDefinition] => /common/destiny2_content/json/zh-chs/DestinyUnlockValueDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardMappingDefinition] => /common/destiny2_content/json/zh-chs/DestinyRewardMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardSheetDefinition] => /common/destiny2_content/json/zh-chs/DestinyRewardSheetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemCategoryDefinition] => /common/destiny2_content/json/zh-chs/DestinyItemCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDamageTypeDefinition] => /common/destiny2_content/json/zh-chs/DestinyDamageTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModeDefinition] => /common/destiny2_content/json/zh-chs/DestinyActivityModeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMedalTierDefinition] => /common/destiny2_content/json/zh-chs/DestinyMedalTierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyAchievementDefinition] => /common/destiny2_content/json/zh-chs/DestinyAchievementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityGraphDefinition] => /common/destiny2_content/json/zh-chs/DestinyActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityInteractableDefinition] => /common/destiny2_content/json/zh-chs/DestinyActivityInteractableDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBondDefinition] => /common/destiny2_content/json/zh-chs/DestinyBondDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationCategoryDefinition] => /common/destiny2_content/json/zh-chs/DestinyCharacterCustomizationCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCharacterCustomizationOptionDefinition] => /common/destiny2_content/json/zh-chs/DestinyCharacterCustomizationOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyCollectibleDefinition] => /common/destiny2_content/json/zh-chs/DestinyCollectibleDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyDestinationDefinition] => /common/destiny2_content/json/zh-chs/DestinyDestinationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEntitlementOfferDefinition] => /common/destiny2_content/json/zh-chs/DestinyEntitlementOfferDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEquipmentSlotDefinition] => /common/destiny2_content/json/zh-chs/DestinyEquipmentSlotDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEventCardDefinition] => /common/destiny2_content/json/zh-chs/DestinyEventCardDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivityGraphDefinition] => /common/destiny2_content/json/zh-chs/DestinyFireteamFinderActivityGraphDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderActivitySetDefinition] => /common/destiny2_content/json/zh-chs/DestinyFireteamFinderActivitySetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelDefinition] => /common/destiny2_content/json/zh-chs/DestinyFireteamFinderLabelDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderLabelGroupDefinition] => /common/destiny2_content/json/zh-chs/DestinyFireteamFinderLabelGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionDefinition] => /common/destiny2_content/json/zh-chs/DestinyFireteamFinderOptionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderOptionGroupDefinition] => /common/destiny2_content/json/zh-chs/DestinyFireteamFinderOptionGroupDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyStatDefinition] => /common/destiny2_content/json/zh-chs/DestinyStatDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemDefinition] => /common/destiny2_content/json/zh-chs/DestinyInventoryItemDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyInventoryItemLiteDefinition] => /common/destiny2_content/json/zh-chs/DestinyInventoryItemLiteDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyItemTierTypeDefinition] => /common/destiny2_content/json/zh-chs/DestinyItemTierTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutColorDefinition] => /common/destiny2_content/json/zh-chs/DestinyLoadoutColorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutIconDefinition] => /common/destiny2_content/json/zh-chs/DestinyLoadoutIconDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutNameDefinition] => /common/destiny2_content/json/zh-chs/DestinyLoadoutNameDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLocationDefinition] => /common/destiny2_content/json/zh-chs/DestinyLocationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoreDefinition] => /common/destiny2_content/json/zh-chs/DestinyLoreDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMaterialRequirementSetDefinition] => /common/destiny2_content/json/zh-chs/DestinyMaterialRequirementSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMetricDefinition] => /common/destiny2_content/json/zh-chs/DestinyMetricDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyObjectiveDefinition] => /common/destiny2_content/json/zh-chs/DestinyObjectiveDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPerkDefinition] => /common/destiny2_content/json/zh-chs/DestinySandboxPerkDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlatformBucketMappingDefinition] => /common/destiny2_content/json/zh-chs/DestinyPlatformBucketMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPlugSetDefinition] => /common/destiny2_content/json/zh-chs/DestinyPlugSetDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPowerCapDefinition] => /common/destiny2_content/json/zh-chs/DestinyPowerCapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyPresentationNodeDefinition] => /common/destiny2_content/json/zh-chs/DestinyPresentationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionDefinition] => /common/destiny2_content/json/zh-chs/DestinyProgressionDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyProgressionLevelRequirementDefinition] => /common/destiny2_content/json/zh-chs/DestinyProgressionLevelRequirementDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRecordDefinition] => /common/destiny2_content/json/zh-chs/DestinyRecordDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterPointerDefinition] => /common/destiny2_content/json/zh-chs/DestinyRewardAdjusterPointerDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardAdjusterProgressionMapDefinition] => /common/destiny2_content/json/zh-chs/DestinyRewardAdjusterProgressionMapDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyRewardItemListDefinition] => /common/destiny2_content/json/zh-chs/DestinyRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySackRewardItemListDefinition] => /common/destiny2_content/json/zh-chs/DestinySackRewardItemListDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySandboxPatternDefinition] => /common/destiny2_content/json/zh-chs/DestinySandboxPatternDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonDefinition] => /common/destiny2_content/json/zh-chs/DestinySeasonDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySeasonPassDefinition] => /common/destiny2_content/json/zh-chs/DestinySeasonPassDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationDefinition] => /common/destiny2_content/json/zh-chs/DestinySocialCommendationDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketCategoryDefinition] => /common/destiny2_content/json/zh-chs/DestinySocketCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocketTypeDefinition] => /common/destiny2_content/json/zh-chs/DestinySocketTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyTraitDefinition] => /common/destiny2_content/json/zh-chs/DestinyTraitDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockCountMappingDefinition] => /common/destiny2_content/json/zh-chs/DestinyUnlockCountMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockEventDefinition] => /common/destiny2_content/json/zh-chs/DestinyUnlockEventDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyUnlockExpressionMappingDefinition] => /common/destiny2_content/json/zh-chs/DestinyUnlockExpressionMappingDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyVendorDefinition] => /common/destiny2_content/json/zh-chs/DestinyVendorDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyMilestoneDefinition] => /common/destiny2_content/json/zh-chs/DestinyMilestoneDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyActivityModifierDefinition] => /common/destiny2_content/json/zh-chs/DestinyActivityModifierDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyReportReasonCategoryDefinition] => /common/destiny2_content/json/zh-chs/DestinyReportReasonCategoryDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyArtifactDefinition] => /common/destiny2_content/json/zh-chs/DestinyArtifactDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyBreakerTypeDefinition] => /common/destiny2_content/json/zh-chs/DestinyBreakerTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyChecklistDefinition] => /common/destiny2_content/json/zh-chs/DestinyChecklistDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyEnergyTypeDefinition] => /common/destiny2_content/json/zh-chs/DestinyEnergyTypeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinySocialCommendationNodeDefinition] => /common/destiny2_content/json/zh-chs/DestinySocialCommendationNodeDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankDefinition] => /common/destiny2_content/json/zh-chs/DestinyGuardianRankDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyGuardianRankConstantsDefinition] => /common/destiny2_content/json/zh-chs/DestinyGuardianRankConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyLoadoutConstantsDefinition] => /common/destiny2_content/json/zh-chs/DestinyLoadoutConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                            [DestinyFireteamFinderConstantsDefinition] => /common/destiny2_content/json/zh-chs/DestinyFireteamFinderConstantsDefinition-e8856610-ba53-4118-9d1a-375ddb5476e4.json
                        )

                )

            [mobileClanBannerDatabasePath] => /common/destiny2_content/clanbanner/clanbanner_sql_content_0bbe318c89b30e78f0a59349a8e44054.content
            [mobileGearCDN] => Array
                (
                    [Geometry] => /common/destiny2_content/geometry/platform/mobile/geometry
                    [Texture] => /common/destiny2_content/geometry/platform/mobile/textures
                    [PlateRegion] => /common/destiny2_content/geometry/platform/mobile/plated_textures
                    [Gear] => /common/destiny2_content/geometry/gear
                    [Shader] => /common/destiny2_content/geometry/platform/mobile/shaders
                )

            [iconImagePyramidInfo] => Array
                (
                )

        )

    [ErrorCode] => 1
    [ThrottleSeconds] => 0
    [ErrorStatus] => Success
    [Message] => Ok
    [MessageData] => Array
        (
        )

)

Error: Expected a string for 'jsonWorldComponentContentPaths'.


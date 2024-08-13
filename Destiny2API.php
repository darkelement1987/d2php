<?php
// Destiny2API.php

class Destiny2API
{
    private $apiKey;
    private $baseUrl = 'https://www.bungie.net/Platform';

    public function __construct($apiKey = null)
    {
        if ($apiKey === null) {
            $config = require 'config.php';
            $this->apiKey = $config['api_key'];
        } else {
            $this->apiKey = $apiKey;
        }
    }

    private function sendRequest($endpoint, $params = [])
    {
        $url = $this->baseUrl . $endpoint;
        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "X-API-Key: {$this->apiKey}"
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    // General Endpoints
    public function getManifest()
    {
        return $this->sendRequest('/Destiny2/Manifest/');
    }

    public function searchDestinyPlayer($membershipType, $displayName)
    {
        return $this->sendRequest("/Destiny2/SearchDestinyPlayer/{$membershipType}/{$displayName}/");
    }

    // Clan Endpoints
    public function getClanWeeklyRewardState($groupId)
    {
        return $this->sendRequest("/Destiny2/Clan/{$groupId}/WeeklyRewardState/");
    }

    public function getClanBannerSource()
    {
        return $this->sendRequest('/Destiny2/Clan/ClanBannerDictionary/');
    }

    // Profile Endpoints
    public function getProfile($membershipType, $destinyMembershipId, $components)
    {
        return $this->sendRequest("/Destiny2/{$membershipType}/Profile/{$destinyMembershipId}/", [
            'components' => implode(',', $components)
        ]);
    }

    public function getCharacter($membershipType, $destinyMembershipId, $characterId, $components)
    {
        return $this->sendRequest("/Destiny2/{$membershipType}/Profile/{$destinyMembershipId}/Character/{$characterId}/", [
            'components' => implode(',', $components)
        ]);
    }

    public function getItem($membershipType, $destinyMembershipId, $itemInstanceId, $components)
    {
        return $this->sendRequest("/Destiny2/{$membershipType}/Profile/{$destinyMembershipId}/Item/{$itemInstanceId}/", [
            'components' => implode(',', $components)
        ]);
    }

    // Milestones
    public function getMilestones()
    {
        return $this->sendRequest('/Destiny2/Milestones/');
    }

    // Vendors
    public function getVendors($membershipType, $destinyMembershipId, $characterId, $components)
    {
        return $this->sendRequest("/Destiny2/{$membershipType}/Profile/{$destinyMembershipId}/Character/{$characterId}/Vendors/", [
            'components' => implode(',', $components)
        ]);
    }

    public function getVendor($membershipType, $destinyMembershipId, $characterId, $vendorHash, $components)
    {
        return $this->sendRequest("/Destiny2/{$membershipType}/Profile/{$destinyMembershipId}/Character/{$characterId}/Vendors/{$vendorHash}/", [
            'components' => implode(',', $components)
        ]);
    }

    // Search Inventory Items
    public function searchInventoryItemsByName($name)
    {
        $manifest = $this->getManifest();
        $itemDefinitionsUrl = 'https://www.bungie.net' . $manifest['Response']['jsonWorldComponentContentPaths']['en']['DestinyInventoryItemDefinition'];
        $itemsData = json_decode(file_get_contents($itemDefinitionsUrl), true);
        
        $results = [];

        foreach ($itemsData as $item) {
            if (stripos($item['displayProperties']['name'], $name) !== false) {
                $results[] = [
                    'name' => $item['displayProperties']['name'],
                    'icon' => 'https://www.bungie.net' . $item['displayProperties']['icon'],
                    'hash' => $item['hash']
                ];
            }
        }

        return $results;
    }

    public function getInventoryItem($itemHash)
    {
        $manifest = $this->getManifest();
        $itemDefinitionsUrl = 'https://www.bungie.net' . $manifest['Response']['jsonWorldComponentContentPaths']['en']['DestinyInventoryItemDefinition'];
        $itemsData = json_decode(file_get_contents($itemDefinitionsUrl), true);

        return $itemsData[$itemHash] ?? null;
    }
}

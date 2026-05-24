<?php

function getTikTokProfileStats($username) {
    $api_url = "https://example.com/api/tiktok/stats?username=" . urlencode($username);
    
    $response = file_get_contents($api_url);
    
    $data = json_decode($response, true);
    
    $followerCount = $data['follower_count'];
    $likeCount = $data['like_count'];
    $viewCount = $data['view_count'];
    
    return "TikTok profil statistikasi:\Profil: " . $followerCount . "\nLayklar soni: " . $likeCount . "\nKo'rishlar soni: " . $viewCount;
}


$username = "example_user";

$profileStats = getTikTokProfileStats($username);

echo $profileStats;

?>
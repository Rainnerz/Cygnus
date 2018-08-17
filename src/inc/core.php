<?php
// Hello! Please do not touch this file as it is extremely important. 
// If you want to change something then please do it via the Admin Panel.
// Using my bestfriend phpFastCache

include ("config.php");
require_once 'SourceQuery.php';

$api_key = $SteamKey;

// Source Query
use phpFastCache\CacheManager;
require __DIR__ . '/../autoload.php';

$cachePool = CacheManager::getInstance('Files');
$cacheItem = $cachePool->getItem('mySteamServer');
$cacheItem2 = $cachePool->getItem('mySteamServer2');
$cacheItem3 = $cachePool->getItem('mySteamServer3');
$cacheItem4 = $cachePool->getItem('profile1');
$cacheItem5 = $cachePool->getItem('profile2');
$cacheItem6 = $cachePool->getItem('profile3');
$cacheItem7 = $cachePool->getItem('profile4');

// Server One Cached
if($cacheItem->isHit()){
    $infos = $cacheItem->get();
}else{
    $server = new SourceQuery($serveroneip, $serveroneport);
    $infos = $server->getInfos();
    $cacheItem->set($infos)->expiresAfter(300);
    $cachePool->save($cacheItem);
}

// Server Two Cached
if($cacheItem2->isHit()){
    $infostwo = $cacheItem2->get();
}else{
    $servertwo = new SourceQuery($servertwoip, $servertwoport);
	$infostwo = $servertwo->getInfos();
    $cacheItem2->set($infostwo)->expiresAfter(300);
    $cachePool->save($cacheItem2);
}

// Server Three Cached
if($cacheItem3->isHit()){
    $infosthree = $cacheItem3->get();
}else{
    $serverthree = new SourceQuery($serverthreeip, $serverthreeport);
	$infosthree = $serverthree->getInfos();
    $cacheItem3->set($infosthree)->expiresAfter(300);
    $cachePool->save($cacheItem3);
}

// Steam Info Cache Start
// Steam Profile 1
if($cacheItem4->isHit()){
    $json = $cacheItem4->get();
}else{
	$api_url = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamid";
	$json = json_decode(file_get_contents($api_url), true);
    $cacheItem4->set($json)->expiresAfter(300);
    $cachePool->save($cacheItem4);
}

// Steam Profile 2
if($cacheItem5->isHit()){
    $jsontwo = $cacheItem5->get();
}else{
	$api_urltwo = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamidtwo";
	$jsontwo = json_decode(file_get_contents($api_urltwo), true);
    $cacheItem5->set($jsontwo)->expiresAfter(300);
    $cachePool->save($cacheItem5);
}

// Steam Profile 3
if($cacheItem6->isHit()){
    $jsonthree = $cacheItem6->get();
}else{
	$api_urlthree = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamidthree";
	$jsonthree = json_decode(file_get_contents($api_urlthree), true);
    $cacheItem6->set($jsonthree)->expiresAfter(300);
    $cachePool->save($cacheItem6);
}

// Steam Profile 4
if($cacheItem7->isHit()){
    $jsonfour = $cacheItem7->get();
}else{
	$api_urlfour = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamidfour";
	$jsonfour = json_decode(file_get_contents($api_urlfour), true);
    $cacheItem7->set($jsonfour)->expiresAfter(300);
    $cachePool->save($cacheItem7);
}
?>
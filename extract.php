<?php
$htmlFile = __DIR__ . "/demo.html";
$jsonFile = __DIR__ . "/output.json";

if (!file_exists($htmlFile)) {
    die("File not found");
}

$html = file_get_contents($htmlFile);
$pattern = '/<tbody>(.*?)<\/tbody>/s';
$trPattern = '/<tr.*?>(.*?)<\/tr>/s';
$tdPattern = '/<td.*?>(.*?)<\/td>/s';

$items = [];
if (preg_match($pattern, $html, $matches)) {
    $tbodyContent = $matches[1];

    preg_match_all($trPattern, $tbodyContent, $trMatches);

    foreach ($trMatches[0] as $tr) {
        preg_match_all($tdPattern, $tr, $tdMatches);

        unset($tdMatches[1][0]);

        $tdMatches[1] = array_values($tdMatches[1]);

        $items[] = $tdMatches[1];
    }
}

print_r($items);

print "Number of items: " . count($items) . PHP_EOL;

file_put_contents($jsonFile, json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

print "Data extracted successfully" . PHP_EOL;

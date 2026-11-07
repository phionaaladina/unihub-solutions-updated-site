<?php
$file = __DIR__ . '/resources/views/pages/home.blade.php';
$content = file_get_contents($file);

$old = <<<EOD
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                Digital Access for All
            </h1>
EOD;

$new = <<<EOD
            <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-[900] tracking-tight text-white leading-[1.08] drop-shadow-[0_4px_16px_rgba(0,0,0,0.5)]">
                Digital Access for All
            </h1>
EOD;

$contentNormalized = str_replace("\r\n", "\n", $content);
$oldNormalized = str_replace("\r\n", "\n", $old);
$newNormalized = str_replace("\r\n", "\n", $new);

if (strpos($contentNormalized, $oldNormalized) !== false) {
    $result = str_replace($oldNormalized, $newNormalized, $contentNormalized);
    file_put_contents($file, $result);
    echo "SUCCESS\n";
} else {
    echo "NOT_FOUND\n";
}

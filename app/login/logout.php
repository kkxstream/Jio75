<?php

// * Copyright 2024-2025 kkxstream, Inc.
// * Created By : kkxstream

$dir = "../assets/data/";
$fPattern = "*.jtv";

$files = glob($dir . $fPattern);

if ($files !== false && count($files) > 0) {
  $sCount = 0;
  $eCount = 0;

  foreach ($files as $filePath) {
    if (unlink($filePath)) {
      $sCount++;
    } else {
      $eCount++;
    }
  }

  if ($sCount > 0) {
    echo "Successfully deleted $sCount credential file(s).";
  }

  if ($eCount > 0) {
    echo "Encountered errors deleting $eCount credential file(s).";
  }
} else {
  echo "No credential files found in the directory.";
}

<?php

include_once __DIR__ . '/env.php';
include_once __DIR__ . '/shared/database/database.php';

$conn = connectDatabase();

if (!($conn instanceof mysqli)) {
  echo "Database failed: " . $conn;
  die();
}

include_once __DIR__ . '/shared/database/schema.php';
include_once __DIR__ . '/shared/database/populate.php';

foreach ($createTables as $table => $create) {
  $stmt = $conn->prepare($create);
  $result = $stmt->execute();

  if (!$result) {
    echo "Table creation failed: " . $conn->error;
    die();
  }
}

foreach ($populateArray as $table => $inserts) {
  foreach ($inserts as $insert) {
    $stmt = $conn->prepare($insert);
    $result = $stmt->execute();

    if (!$result) {
      echo "Table population failed: " . $conn->error;
      die();
    }
  }
}

echo "Database setup successfully!";

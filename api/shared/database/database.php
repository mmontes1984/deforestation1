<?php

function connectDatabase($count = 1)
{
  try {
    include_once __DIR__ . '/../../env.php';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    return $conn;
  } catch (Exception $e) {
    if ($count < 3) {
      return connectDatabase($count + 1);
    }

    throw new Exception("Failed connection: " . $e->getMessage());
  }
}

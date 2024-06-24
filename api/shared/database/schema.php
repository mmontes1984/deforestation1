<?php
$createTables = [];

function populateMapTables()
{
  global $createTables;

  $postTableCreate = "CREATE TABLE IF NOT EXISTS
  posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(60),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    author_id INT,
    image_path VARCHAR(255),
    FOREIGN KEY (author_id) REFERENCES authors (id)
  );";

  $commentTableCreate = "CREATE TABLE IF NOT EXISTS
  comments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    post_id INT,
    user_id INT,
    FOREIGN KEY (post_id) REFERENCES posts (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
  );";

  $authorTableCreate = "CREATE TABLE IF NOT EXISTS
  authors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
  );";

  $userTableCreate = "CREATE TABLE IF NOT EXISTS
  users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
  );";

  $createTables = [
    'authors' => $authorTableCreate,
    'users' => $userTableCreate,
    'posts' => $postTableCreate,
    'comments' => $commentTableCreate
  ];
};

populateMapTables();

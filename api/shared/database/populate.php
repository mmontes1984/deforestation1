<?php

$populateArray = [];

function populateArray()
{
  global $populateArray;

  $populateArray = [
    "userInserts" => [
      "INSERT INTO users (name, email, password) VALUES ('Usuário 1', 'usuario1@email.com', 'senha1')",
      "INSERT INTO users (name, email, password) VALUES ('Usuário 2', 'usuario2@email.com', 'senha2')",
      "INSERT INTO users (name, email, password) VALUES ('Usuário 3', 'usuario3@email.com', 'senha3')"
    ],
    "authorInserts" => [
      "INSERT INTO authors (name) VALUES ('Autor 1')",
      "INSERT INTO authors (name) VALUES ('Autor 2')",
      "INSERT INTO authors (name) VALUES ('Autor 3')"
    ],

    "postInserts" => [
      "INSERT INTO posts (title, content, author_id, description, image_path) VALUES ('Primeiro Post', 'Este é o conteúdo do primeiro post.', 1, 'Essa é a descrição do primeiro post', '/deforestation/api/public/deforestation.jpg')",
      "INSERT INTO posts (title, content, author_id, description, image_path) VALUES ('Segundo Post', 'Este é o conteúdo do segundo post.', 1, 'Essa é a descrição do segundo post', '/deforestation/api/public/deforestation_664beb644f5d9.jpg')",
      "INSERT INTO posts (title, content, author_id, description, image_path) VALUES ('Terceiro Post', 'Este é o conteúdo do terceiro post.', 2, 'Essa é a descrição do terceiro post', '/deforestation/api/public/deforestation_664beb1667836.jpg')"
    ],
    "commentInserts" => [
      "INSERT INTO comments (content, post_id, user_id) VALUES ('Primeiro comentário', 1, 1)",
      "INSERT INTO comments (content, post_id, user_id) VALUES ('Segundo comentário', 1, 2)",
      "INSERT INTO comments (content, post_id, user_id) VALUES ('Terceiro comentário', 2, 1)"
    ],

  ];
}

populateArray();

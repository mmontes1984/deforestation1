<?php

class ImageService
{
  public static function uploadImage($image, $path)
  {
    if (!isset($image['tmp_name']) || $image['tmp_name'] == '') {
      return false;
    }

    $path = realpath($path);

    if (!file_exists($path)) {
      mkdir($path, 0777, true);
    }

    $imageName = pathinfo($image['name'], PATHINFO_FILENAME);
    $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $newImageName = $imageName . '_' . uniqid() . '.' . $imageExtension;
    $imagePath = $path . DIRECTORY_SEPARATOR . $newImageName;

    $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
    if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {
      return false;
    }
    if (move_uploaded_file($image['tmp_name'], $imagePath)) {
      return $imagePath;
    }

    return false;
  }
}

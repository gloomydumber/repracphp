<?php
require('faceapp.php');
try {
    $FaceApp = new FaceApp('test/image.jpg', true);
  
    $photoCode = $FaceApp->getPhotoCode();

    //to get all available filters use : $FaceApp->getFilters();

    $filter = 'old';

    $FaceApp->applyFilter($photoCode, $filter, false);

    if ($FaceApp->savePhoto('newImage.jpg')) {
        echo "Done!";
    }
} catch (Exception $e) {
    exit($e->getMessage());
}
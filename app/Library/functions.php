<?php

function UploadImage( $inputFile, $prefix, $folderNam ) {

    $imageName = $prefix . '_' . time() .'.' . $inputFile->getClientOriginalExtension();

    $destinationPath = public_path( '/' . $folderNam );

    $inputFile->move( $destinationPath, $imageName );

    return $imageName ? $imageName : false;
}
<?php

namespace App;

use PhpOffice\PhpSpreadsheet\IOFactory;

class App {

  public static function main(){
    $inputFileType = 'Xlsx';
    $inputFileName = __DIR__ . '/../resources/Table.xlsx';
    
    $reader = IOFactory::createReader($inputFileType);
    $spreadsheet = $reader->load($inputFileName);
    
    $dataArray = $spreadsheet->getActiveSheet()->toArray();

    echo '<pre>';
    var_dump($dataArray);
    echo '</pre>';
  }
}
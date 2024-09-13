<?php

namespace App;

use PhpOffice\PhpSpreadsheet\IOFactory;

class App {

  public static function main(){
    $inputFileType = 'Xlsx';
    $inputFileName = __DIR__ . '/../resources/Table.xlsx';
    
    $reader = IOFactory::createReader($inputFileType);
    $spreadsheet = $reader->load($inputFileName);


    //$dataArray = $worksheet->toArray();

    // echo '<pre>';
    // var_dump(get_class_methods($spreadsheet));
    // echo '</pre>';
    //$dataArray = $spreadsheet->toArray();
  }
}
<?php

namespace App;

class App {

  public static function main(){
    $inputFileType = 'Xlsx';
    $inputFileName = __DIR__ . '/../resources/Table.xlsx';
    
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
    //var_dump($spreadsheet);

    echo '<pre>';
    var_dump(get_class_methods($spreadsheet));
    echo '</pre>';
    //$dataArray = $spreadsheet->toArray();
  }
}
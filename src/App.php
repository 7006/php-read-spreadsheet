<?php

namespace App;

use PhpOffice\PhpSpreadsheet\IOFactory;

class App {

  public static function main() {
    $table = self::readSpreadSheet();
    self::renderSpreadSheet($table);
  }

  public static function readSpreadSheet() {
    $inputFileType = 'Xlsx';
    $inputFileName = __DIR__ . '/../resources/Table.xlsx';

    $reader = IOFactory::createReader($inputFileType);
    $spreadsheet = $reader->load($inputFileName);
    return $spreadsheet->getActiveSheet()->toArray();
  }

  public static function  renderSpreadSheet($table) {
    
    foreach ($table as $tableRow) { ?>
      <table>
        <tr>
          <?php foreach ($tableRow as $tableColum) { ?>
          <td>
            <?php echo $tableColum; ?>
          </td>
          <?php } ?>
          </tr>
      </table>
    <?php
    }
  }
}
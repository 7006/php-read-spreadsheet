<?php

namespace App;

use PhpOffice\PhpSpreadsheet\IOFactory;

class App {

  public static function main() {
    App::readSpreadsheet();
    App::renderSpreadSheet();
  }

  public static function readSpreadsheet() {
    $inputFileType = 'Xlsx';
    $inputFileName = __DIR__ . '/../resources/Table.xlsx';

    $reader = IOFactory::createReader($inputFileType);
    $spreadsheet = $reader->load($inputFileName);
    $table = $spreadsheet->getActiveSheet()->toArray();
    return $table;
  }

  public static function  renderSpreadSheet() {
    
    foreach (self::readSpreadsheet() as $tableRow) { ?>
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
<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTSBaseSeeder extends Seeder
{
  protected function getSetId(): string
  {
    return '';
  }
  protected function getJsonFileName(): string
  {
    return '';
  }

  public function run()
  {
    $file = base_path('resources/json/' . $this->getJsonFileName());
    if (!is_file($file)) {
      throw new \Exception("JSON file not found: {$file}");
    }
    $data = json_decode(file_get_contents($file), true);
    if (json_last_error() !== JSON_ERROR_NONE) {
      throw new \Exception("Invalid JSON format: " . json_last_error_msg());
    }
    foreach ($data as $category => $groups) {
      $this->insertGroup($groups, $category);
    }
  }

  protected function insertGroup(array $items, string $category)
  {
    $setId = $this->getSetId();
    foreach ($items as $tipeSoal => $answers) {
      foreach (array_values($answers) as $i => $answer) {
        Soal::create([
          'set_id'        => $setId,
          'id_soal'       => "{$setId}-" . ($i + 1),
          'tipe_soal'     => $tipeSoal,
          'kategori'      => $category,
          'jawaban_benar' => $answer
        ]);
      }
    }
  }
}

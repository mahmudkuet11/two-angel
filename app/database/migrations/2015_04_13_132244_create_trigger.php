<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration {

 public function up()
    {

         DB::unprepared('
              CREATE TRIGGER addProductIncreamentQuantity AFTER INSERT ON `products` FOR EACH ROW
                   BEGIN
                       UPDATE categories SET quantity = quantity +1 WHERE name = NEW.category;
                   END
                   ');
     }

 public function down()
    {
         DB::unprepared('DROP TRIGGER `addProductIncreamentQuantity`');
    }

}

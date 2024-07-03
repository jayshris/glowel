<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTable extends Migration
{
    public function up()
    {
        $fields = array(
            'name' => array(
              'name' => 'first_name'
            )
          );
          $this->forge->modifyColumn('users', $fields);
      
          $this->forge->addColumn('users', [
                'preferences' => ['type' => 'TEXT', 'after' => 'another_field'],
                'test' => ['type' => 'TEXT',  'first' => true],
            ]);

            //rename table
            $this->forge->renameTable('old_table_name', 'new_table_name');;

        }
      
        public function down()
        {
          $fields = array(
            'first_name' => array(
              'name' => 'name'
            )
          );
          $this->forge->modifyColumn('users', $fields);
          $this->forge->dropColumn('table_name', ['column_1', 'column_2']); // to drop one single column
          $this->forge->dropKey('tablename', 'users_index', false);
          
        }
}

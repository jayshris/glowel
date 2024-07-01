<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','usigned'=>true, 'constraint' => 10, 'unsigned' => true, 'auto_increment' => true],
            'order_no' => ['type' => 'VARCHAR', 'constraint' => 30],
            'customer_name' => ['type' => 'VARCHAR', 'constraint' => 30],
            'status' => ['type' => 'INT' ,'constraint' => 10,'comments'=>'0=>open,1=>ready for invoicing'],
            'added_date datetime default current_timestamp',
            'complete_date' => ['type' => 'VARCHAR', 'constraint' => 30],
            'added_by' => ['type' => 'INT' ,'constraint' => 10],
            'added_ip' => ['type' => 'VARCHAR', 'constraint' => 30],
            'modify_date' => ['type' => 'VARCHAR', 'constraint' => 30],
            'modify_ip' => ['type' => 'VARCHAR', 'constraint' => 30],
            'modify_by' => ['type' => 'INT' ,'constraint' => 10],
            'is_deleted' => ['type' => 'INT' ,'constraint' => 10],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp NULL DEFAULT NULL',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('purchase_orders');
    }

    public function down()
    {
       $this->forge->dropTable('purchase_orders');
    }
}

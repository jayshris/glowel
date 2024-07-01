<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PurchaseOrderProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT','usigned'=>true, 'constraint' => 10, 'unsigned' => true, 'auto_increment' => true],
            'order_id' => ['type' => 'INT' ,'constraint' => 10],
            'product_id' => ['type' => 'INT' ,'constraint' => 10],
            'quantity' => ['type' => 'INT' ,'constraint' => 10],
            'rate' => ['type' => 'INT' ,'constraint' => 10],
            'amount' => ['type' => 'INT' ,'constraint' => 10],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp NULL DEFAULT NULL',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('purchase_order_products');
    }

    public function down()
    {
       $this->forge->dropTable('purchase_order_products');
    }
}

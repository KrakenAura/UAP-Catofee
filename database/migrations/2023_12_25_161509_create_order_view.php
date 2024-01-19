<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Define the SQL query for the view
        $query = "
            CREATE VIEW order_view AS
            SELECT
                o.id,
                o.total_price,
                o.room,
                o.date,
                o.customer_name,
                o.status,
                m.menu AS menu_name
            FROM
                `orders` o
            JOIN
                `menu` m ON o.menu_id = m.id
        ";

        // Execute the raw SQL query to create the view
        DB::statement($query);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the view
        DB::statement('DROP VIEW IF EXISTS order_view');
    }
};

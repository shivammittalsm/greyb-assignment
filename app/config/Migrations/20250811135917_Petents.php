<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class Petents extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('patents');

        $table
            ->addColumn('patent_id', 'string', [
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('title', 'text', [
                'null' => true,
            ])
            ->addColumn('assignee', 'string', [
                'limit' => 255,
                'null' => true
            ])
            ->addColumn('inventor_author', 'text', [
                'null' => true,
            ])
            ->addColumn('priority_date', 'date', [
                'null' => true
            ])
            ->addIndex(['assignee'])
            ->addIndex(['priority_date'])
            ->create();
    }
}

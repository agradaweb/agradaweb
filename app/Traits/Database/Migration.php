<?php

namespace App\Traits\Database;

use Illuminate\Database\Schema\Blueprint;

trait Migration
{
        /**
     * Return table name.
     */
    public function getTableName(string $table): string
    {
        if (config('agrada.table_prefix') !== '') {
            return config('agrada.table_prefix') . $table;
        }

        return $table;
    }

    /**
     * Create fields common to all tables.
     */
    public function addCommonFields(Blueprint $table, bool $hasSoftDelete = false): void
    {
        $table->id();
        $table->timestamps();

        if ($hasSoftDelete) {
            $table->softDeletes();
        }
    }

    
    public function addString(Blueprint $table, string $columnName, bool $nullable = true): void
    {
        if ($nullable) {
            $table->string($columnName)->nullable();
        } else {
            $table->string($columnName);
        }
    }

    /**
     * Link table to $tableName using $columnName.
     *
     * @param Blueprint $table      Laravel Blueprint
     * @param string    $columnName MySQL table column name
     * @param string    $tableName  MySQL table name
     * @param bool      $nullable   Foreign key nullable status
     */
    public function addForeignKey(Blueprint $table, string $columnName, string $tableName, bool $nullable = true): void
    {
        if ($nullable) {
            $table->unsignedBigInteger($columnName)->index()->nullable();
            $table->foreign($columnName)->references('id')->on($tableName)->onDelete('set null');
        } else {
            $table->unsignedBigInteger($columnName);
            $table->foreign($columnName)->references('id')->on($tableName)->onDelete('cascade');
        }
    }

    public function relateduser(Blueprint $table): void
    {
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');        
    }
    

    /**
     * Remove foreign key using $columnName.
     *
     * @param Blueprint $table      Laravel Blueprint
     * @param string    $columnName Column on the table
     */
    public function removeLink(Blueprint $table, string $columnName): void
    {
        $table->dropForeign([$columnName]);
        $table->dropColumn([$columnName]);
    }
}
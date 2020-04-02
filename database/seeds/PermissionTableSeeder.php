<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert = [
            [
                'name'=>'role-read',
                'display_name'=> 'Đọc',
                'description' =>  'Quyền đọc'
            ],
            [
                'name'=>'role-delete',
                'display_name'=> 'Xóa',
                'description' =>  'Quyền xóa'
            ],
            [
                'name'=>'role-edit',
                'display_name'=> 'Sửa',
                'description' =>  'Quyền sửa'
            ]

        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'course_create',
            ],
            [
                'id'    => 19,
                'title' => 'course_edit',
            ],
            [
                'id'    => 20,
                'title' => 'course_show',
            ],
            [
                'id'    => 21,
                'title' => 'course_delete',
            ],
            [
                'id'    => 22,
                'title' => 'course_access',
            ],
            [
                'id'    => 23,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 24,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 25,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 26,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 27,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 28,
                'title' => 'test_create',
            ],
            [
                'id'    => 29,
                'title' => 'test_edit',
            ],
            [
                'id'    => 30,
                'title' => 'test_show',
            ],
            [
                'id'    => 31,
                'title' => 'test_delete',
            ],
            [
                'id'    => 32,
                'title' => 'test_access',
            ],
            [
                'id'    => 33,
                'title' => 'question_create',
            ],
            [
                'id'    => 34,
                'title' => 'question_edit',
            ],
            [
                'id'    => 35,
                'title' => 'question_show',
            ],
            [
                'id'    => 36,
                'title' => 'question_delete',
            ],
            [
                'id'    => 37,
                'title' => 'question_access',
            ],
            [
                'id'    => 38,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 39,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 40,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 41,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 42,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 43,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 44,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 45,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 46,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 47,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 48,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 49,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 50,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 51,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 52,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 53,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 54,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 55,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 56,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 57,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 58,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 59,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 60,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 61,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 62,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 63,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 64,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 65,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 66,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 67,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 68,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 69,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 70,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 71,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 72,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 73,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 74,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 75,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 76,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 77,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 78,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 79,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 80,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 81,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 82,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 83,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 84,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 85,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 86,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 87,
                'title' => 'task_create',
            ],
            [
                'id'    => 88,
                'title' => 'task_edit',
            ],
            [
                'id'    => 89,
                'title' => 'task_show',
            ],
            [
                'id'    => 90,
                'title' => 'task_delete',
            ],
            [
                'id'    => 91,
                'title' => 'task_access',
            ],
            [
                'id'    => 92,
                'title' => 'task_calendar_access',
            ],
        ];

        Permission::insert($permissions);
    }
}

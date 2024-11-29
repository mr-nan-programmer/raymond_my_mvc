<?php

namespace App\Http\Controllers;

class api
{
public function index(){

// Secret key
    $secret = 'yiwutraderaymond2024';

// دریافت اطلاعات درخواست از گیت‌هاب
    $payload = file_get_contents('php://input');
    $signature = $_SERVER['HTTP_X_HUB_SIGNATURE'] ?? '';

// بررسی صحت درخواست
    if (!$signature || !hash_equals('sha1=' . hash_hmac('sha1', $payload, $secret), $signature)) {
        http_response_code(403);
        file_put_contents('webhook_log.txt',"signatrue invalid", FILE_APPEND);die();
    }

// پردازش اطلاعات درخواست
    $data = json_decode($payload, true);

// بررسی اینکه آیا تغییرات روی شاخه اصلی (main) بوده است
    if (isset($data['ref']) && $data['ref'] === 'refs/heads/main') {
        file_put_contents('webhook_log.txt',$payload, FILE_APPEND);

        // مسیر پروژه روی سرور
        $projectDir = '/home/yiwuraym/public_html';

        // git pull
        chdir($projectDir);
        $output = shell_exec('git pull 2>&1');

        // ثبت خروجی برای بررسی
        file_put_contents('webhook_log.txt', $output, FILE_APPEND);

        echo "Project updated successfully!";
    } else {
        echo "No action taken.";
    }


}
}
<?php

/**
 * تابعی برای چاپ صفحه‌ی شطرنجی
 */
function printBoard($board) {
    for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
            echo $board[$i][$j] . " ";
        }
        echo "\n";
    }
}

/** 
 * تابعی برای بررسی اینکه آیا می‌توان یک وزیر را در خانه‌ی فعلی قرار داد یا نه
 */
function isSafe($board, $row, $col) {
    // بررسی سطر‌ها بالای خانه‌ی فعلی
    for ($i = 0; $i < $row; $i++) {
        if ($board[$i][$col] == 1) {
            return false;
        }
    }

    // بررسی قطر اصلی بالای خانه‌ی فعلی
    for ($i = $row, $j = $col; $i >= 0 && $j >= 0; $i--, $j--) {
        if ($board[$i][$j] == 1) {
            return false;
        }
    }

    // بررسی قطر فرعی بالای خانه‌ی فعلی
    for ($i = $row, $j = $col; $i >= 0 && $j < 8; $i--, $j++) {
        if ($board[$i][$j] == 1) {
            return false;
        }
    }

    return true;
}

/**
 * تابعی برای حل مسئله هشت وزیر با استفاده از الگوریتم عقبگرد
 */
function solve($board, $row) {
    // اگر تمام صفحه را پوشانده‌ایم، مسئله حل شده است
    if ($row == 8) {
        printBoard($board);
        echo "\n";
        return true;
    }

    $result = false;

    // تلاش برای قرار دادن وزیر در ستون‌های مختلف
    for ($i = 0; $i < 8; $i++) {
        if (isSafe($board, $row, $i)) {
            // قرار دادن وزیر در خانه‌ی فعلی
            $board[$row][$i] = 1;

            // حل مسئله برای سطر بعدی با استفاده از بازگشتی
            $result = solve($board, $row+1) || $result;

            // اگر قرار دادن وزیر در خانه‌ی فعلی نتیجه‌ی منفی داشت، آن را برمی‌گردانیم
            $board[$row][$i] = 0;
        }
    }

    return $result;
}

// ایجاد صفحه‌ی شطرنجی
$board = array();
for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 



5/11/2023, 10:43:35 AM

سلام

5/11/2023, 10:43:40 AM

سلام، چطوری می‌توانم به شما کمک کنم؟




5/11/2023, 10:43:56 AM

مسئله هشت وزیر با الگوریتم عقبگرد به زبان php

5/11/2023, 10:44:24 AM

الگوریتم عقبگرد یا Backtracking Algorithm برای حل مسائل که در آن‌ها باید تعداد زیادی از تصمیمات را در یک دنباله پشت سر هم بگیریم، به کار می‌رود. مسئله هشت وزیر نیز یکی از این مسائل است. در این مسئله، باید هشت وزیر را در یک صفحه شطرنجی ۸x۸ قرار دهیم، به طوری که هیچ دو وزیری با هم در یک خط افقی، عمودی یا قطری نباشند.

برای حل این مسئله با الگوریتم عقبگرد، می‌توانید از روش‌های مختلفی استفاده کنید.
[Network Error]




5/13/2023, 7:04:16 PM

وسط چین کردن در css

5/13/2023, 7:04:37 PM

برای قرار دادن یک المان در وسط یک صفحه از طریق CSS، می توانید از فرمول زیر استفاده کنید:

css
.element {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

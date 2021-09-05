<?php
/**
 * Format định dạng ngày giờ theo chuẩn VN
 */
if (!function_exists('formatDate')) {
    function formatDate($date, string $format = 'd/m/Y'){
        if ($date instanceof \Carbon\Carbon) {
            return $date->format($format);
        }

        return $date;
    }
}

/**
 * Loại bỏ khoảng trắng thừa, ký tự đặc biệt khỏi chuối
 * @string 
 */
if (!function_exists('trimm')){
    function trimm($string){
        $string = trim($string);
        while (Str::contains($string, "  ")){
            $string = Str::replace("  ", " ", $string);
        }
        return $string;
    }
}
?>
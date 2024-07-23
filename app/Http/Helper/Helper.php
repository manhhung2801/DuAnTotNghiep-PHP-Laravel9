<?php

use Illuminate\Support\Carbon;

class Helper
{
    public static function CouponsPrice($offer_start_date, $offer_end_date,  $price,  $offer_price)
    {
        $now = Carbon::now();
        $formattedDate = $now->format('Y-m-d');

        if ($offer_start_date >= $formattedDate && ($offer_end_date >= $formattedDate || empty($offer_end_date))) {
            echo  '<span class="compare-price">' . number_format($price, 0, '.', '.') . '<i class="fa-regular fa-dong-sign"></i></span>';


            echo ' <span class="price">' . number_format($offer_price, 0, '.', '.') . "<i class='fa-solid fa-dong-sign'></i> </span>";
        } else {
            echo     ' <span class="price">' . number_format($price, 0, '.', '.') . '<i
        class="fa-solid fa-dong-sign"></i></span>';
        }
    }



    public static function sale($offer_start_date, $offer_end_date,  $price,  $offer_price)
    {
        $now = Carbon::now();
        $formattedDate = $now->format('Y-m-d');

        if ($offer_price !== null && $offer_start_date >= $formattedDate && ($offer_end_date >= $formattedDate || empty($offer_end_date))) {
            $discountPercentage =  '<span class="flash-sale">Giảm ' . number_format((($price - $offer_price) / $price) * 100, 0) . '%' . '</span>';
            echo $discountPercentage;
        } else {
            //   echo "0%";
        }
    }

    public static function getProductPrice($product)
    {
        $productPrice = null;
        $currentDate = new DateTime();

        // Kiểm tra nếu offer_price tồn tại
        if (!empty($product->offer_price)) {
            $offerStartDate = new DateTime($product->offer_start_date);
            $offerEndDate = new DateTime($product->offer_end_date);

            // Kiểm tra nếu ngày hiện tại nằm trong khoảng thời gian khuyến mãi
            if ($currentDate >= $offerStartDate && $currentDate <= $offerEndDate) {
                $productPrice = $product->offer_price;
            }
        }

        // Nếu không có giá khuyến mãi hợp lệ thì lấy giá gốc
        if ($productPrice === null) {
            $productPrice = $product->price;
        }

        return (int) $productPrice;
    }
    
}


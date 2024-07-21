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

    

    public static function sale($offer_start_date, $offer_end_date,  $price,  $offer_price) {
        $now = Carbon::now();
        $formattedDate = $now->format('Y-m-d');

        if ($offer_price !== null && $offer_start_date >= $formattedDate && ($offer_end_date >= $formattedDate || empty($offer_end_date))) {
          $discountPercentage =  '<span class="flash-sale">Giảm '. number_format((($price - $offer_price) / $price) * 100, 0) . '%'.'</span>';
          echo $discountPercentage;
        } else {
        //   echo "0%";
        }
      }
}

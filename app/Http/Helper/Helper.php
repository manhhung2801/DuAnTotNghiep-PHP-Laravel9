<?php

use Illuminate\Support\Carbon;

class Helper
{
    public static function CouponsPrice($offer_start_date, $offer_end_date,  $price,  $offer_price)
    {
        $now = Carbon::now();


        $startCarbon = Carbon::parse($offer_start_date);
        $endCarbon = Carbon::parse($offer_end_date);
        $price_new = null;
        $price_old = null;

        if ($now->between($startCarbon, $endCarbon)) {
            $price_new = number_format($price, 0, '.', '.');
            $price_old = number_format($offer_price, 0, '.', '.');
        } else {
            $price_new = number_format($price, 0, '.', '.');
        }
        return ['price_new' => $price_new, 'price_old' => $price_old];
    }



    // public static function sale($offer_start_date, $offer_end_date,  $price,  $offer_price) {
    //     $now = Carbon::now();
    //     $formattedDate = $now->format('Y-m-d');

    //     if ($offer_price !== null && $offer_start_date >= $formattedDate && ($offer_end_date >= $formattedDate || empty($offer_end_date))) {
    //       $discountPercentage =  '<span class="flash-sale">Giảm '. number_format((($price - $offer_price) / $price) * 100, 0) . '%'.'</span>';
    //       echo $discountPercentage;
    //     } else {
    //     //   echo "0%";
    //     }
    //   }

    public static function discount($offer_start_date, $offer_end_date,  $price,  $offer_price)
    {
        $now = Carbon::now();
        $formattedDate = $now->format('Y-m-d');
        $startCarbon = Carbon::parse($offer_start_date);
        $endCarbon = Carbon::parse($offer_end_date);
        $discount = 0;
        if ($now->between($startCarbon, $endCarbon)) {
            $discount = number_format((($price - $offer_price) / $price) * 100, 0);
        } else {
            $discount = 0;
        }
        return   $discount;
    }
}

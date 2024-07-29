var flash_sale = document.querySelectorAll(".flash-sale");
var discount = document.querySelectorAll(".discount");

var compare_price = document.querySelectorAll(".CouponsPrice_old");
var price = document.querySelectorAll(".CouponsPrice_new");
for (var i = 0; i < discount.length; i++) {
    if (discount[i].textContent == '0') {
        flash_sale[i].style.display = "none";
        compare_price[i].style.display = "none";

    } else {
        flash_sale[i].style.display = "block";
        compare_price[i].style.display = "block";
    }
}
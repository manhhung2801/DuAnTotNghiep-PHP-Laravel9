## copy .env.example file to change .env file

## run: 
    composer install

## run: 
    npm install
    npm run dev

# connection Database 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3307             
    DB_DATABASE=DuAnTotNghiep
    DB_USERNAME=root
    DB_PASSWORD=

## run to create key form APP_KEY=base64:3YEG/Pxn4nDvR/JvqVHM6Tz7a5r2gbNu+tFpYKZtL6Y=
    php artisan key:generate

## run server 
 php artisan serve

## run migration
    php artisan migrate
    
## run database: Seeding
    php artisan db:seed 


## ------------------------------------------------------
folder to save uploaded images : /uploads/
## ------------------------------------------------------

## ------------------------------------------------------
nếu dùng mac OS hoặc không đẩy được file ảnh vào folder uploads thì 
run : cd public 

run: 
    chmod -R 777 ./uploads 
    or 
    sudo chmod -R 777 ./uploads

cấp quyền thư mục

## ------------------------------------------------------
# toastr 

    https://github.com/yoeunes/toastr
    https://github.com/CodeSeven/toastr
## ------------------------------------------------------

## ------------------------------------------------------
# git 
    git init
    git add .
    git commit -m "first commit"
    git branch task1
    git remote add origin https://github.com/manhhung2801/DuAnTotNghiep-PHP-Laravel9.git
    git push -u origin main
## ------------------------------------------------------

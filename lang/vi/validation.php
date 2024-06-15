<?php
return [

    /*
|--------------------------------------------------------------------------
| Dòng Ngôn Ngữ Xác Thực
|--------------------------------------------------------------------------
|
| Các dòng ngôn ngữ sau chứa các thông báo lỗi mặc định được sử dụng bởi
| lớp validator. Một số quy tắc có nhiều phiên bản như các quy tắc kích thước.
| Hãy thoải mái chỉnh sửa từng thông báo ở đây.
|
*/

    'accepted' => ':attribute phải được chấp nhận.',
    'accepted_if' => ':attribute phải được chấp nhận khi :other là :value.',
    'active_url' => ':attribute không phải là URL hợp lệ.',
    'after' => ':attribute phải là một ngày sau :date.',
    'after_or_equal' => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha' => ':attribute chỉ có thể chứa các chữ cái.',
    'alpha_dash' => ':attribute chỉ có thể chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => ':attribute chỉ có thể chứa các chữ cái và số.',
    'array' => ':attribute phải là một mảng.',
    'ascii' => ':attribute chỉ có thể chứa các ký tự chữ và số một byte và các ký hiệu.',
    'before' => ':attribute phải là một ngày trước :date.',
    'before_or_equal' => ':attribute phải là một ngày trước hoặc bằng :date.',
    'between' => [
        'array' => ':attribute phải có từ :min đến :max mục.',
        'file' => ':attribute phải từ :min đến :max kilobytes.',
        'numeric' => ':attribute phải từ :min đến :max.',
        'string' => ':attribute phải từ :min đến :max ký tự.',
    ],
    'boolean' => ':attribute phải là true hoặc false.',
    'confirmed' => 'Xác nhận :attribute không khớp.',
    'current_password' => 'Mật khẩu không chính xác.',
    'date' => ':attribute không phải là một ngày hợp lệ.',
    'date_equals' => ':attribute phải là một ngày bằng :date.',
    'date_format' => ':attribute không khớp với định dạng :format.',
    'decimal' => ':attribute phải có :decimal chữ số thập phân.',
    'declined' => ':attribute phải bị từ chối.',
    'declined_if' => ':attribute phải bị từ chối khi :other là :value.',
    'different' => ':attribute và :other phải khác nhau.',
    'digits' => ':attribute phải là :digits chữ số.',
    'digits_between' => ':attribute phải từ :min đến :max chữ số.',
    'dimensions' => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => ':attribute có giá trị trùng lặp.',
    'doesnt_end_with' => ':attribute không thể kết thúc bằng một trong những điều sau: :values.',
    'doesnt_start_with' => ':attribute không thể bắt đầu bằng một trong những điều sau: :values.',
    'email' => ':attribute phải là một địa chỉ email hợp lệ.',
    'ends_with' => ':attribute phải kết thúc bằng một trong những điều sau: :values.',
    'enum' => ':attribute được chọn không hợp lệ.',
    'exists' => ':attribute được chọn không hợp lệ.',
    'file' => ':attribute phải là một tệp tin.',
    'filled' => ':attribute phải có giá trị.',
    'gt' => [
        'array' => ':attribute phải có nhiều hơn :value mục.',
        'file' => ':attribute phải lớn hơn :value kilobytes.',
        'numeric' => ':attribute phải lớn hơn :value.',
        'string' => ':attribute phải lớn hơn :value ký tự.',
    ],
    'gte' => [
        'array' => ':attribute phải có :value mục hoặc nhiều hơn.',
        'file' => ':attribute phải lớn hơn hoặc bằng :value kilobytes.',
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'string' => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
    ],
    'image' => ':attribute phải là một hình ảnh.',
    'in' => ':attribute được chọn không hợp lệ.',
    'in_array' => ':attribute không tồn tại trong :other.',
    'integer' => ':attribute phải là một số nguyên.',
    'ip' => ':attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4' => ':attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6' => ':attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json' => ':attribute phải là một chuỗi JSON hợp lệ.',
    'lowercase' => ':attribute phải là chữ thường.',
    'lt' => [
        'array' => ':attribute phải có ít hơn :value mục.',
        'file' => ':attribute phải ít hơn :value kilobytes.',
        'numeric' => ':attribute phải ít hơn :value.',
        'string' => ':attribute phải ít hơn :value ký tự.',
    ],
    'lte' => [
        'array' => ':attribute không được có nhiều hơn :value mục.',
        'file' => ':attribute phải nhỏ hơn hoặc bằng :value kilobytes.',
        'numeric' => ':attribute phải nhỏ hơn hoặc bằng :value.',
        'string' => ':attribute phải nhỏ hơn hoặc bằng :value ký tự.',
    ],
    'mac_address' => ':attribute phải là một địa chỉ MAC hợp lệ.',
    'max' => [
        'array' => ':attribute không được có nhiều hơn :max mục.',
        'file' => ':attribute không được lớn hơn :max kilobytes.',
        'numeric' => ':attribute không được lớn hơn :max.',
        'string' => ':attribute không được lớn hơn :max ký tự.',
    ],
    'max_digits' => ':attribute không được có nhiều hơn :max chữ số.',
    'mimes' => ':attribute phải là một tệp tin loại: :values.',
    'mimetypes' => ':attribute phải là một tệp tin loại: :values.',
    'min' => [
        'array' => ':attribute phải có ít nhất :min mục.',
        'file' => ':attribute phải ít nhất :min kilobytes.',
        'numeric' => ':attribute phải ít nhất :min.',
        'string' => ':attribute phải ít nhất :min ký tự.',
    ],
    'min_digits' => ':attribute phải có ít nhất :min chữ số.',
    'missing' => ':attribute phải bị thiếu.',
    'missing_if' => ':attribute phải bị thiếu khi :other là :value.',
    'missing_unless' => ':attribute phải bị thiếu trừ khi :other là :value.',
    'missing_with' => ':attribute phải bị thiếu khi :values có mặt.',
    'missing_with_all' => ':attribute phải bị thiếu khi :values có mặt.',
    'multiple_of' => ':attribute phải là bội số của :value.',
    'not_in' => ':attribute được chọn không hợp lệ.',
    'not_regex' => 'Định dạng của :attribute không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'password' => [
        'letters' => ':attribute phải chứa ít nhất một chữ cái.',
        'mixed' => ':attribute phải chứa ít nhất một chữ cái viết hoa và một chữ cái viết thường.',
        'numbers' => ':attribute phải chứa ít nhất một số.',
        'symbols' => ':attribute phải chứa ít nhất một ký tự đặc biệt.',
        'uncompromised' => ':attribute đã xuất hiện trong một dữ liệu bị lộ. Vui lòng chọn một :attribute khác.',
    ],
    'present' => ':attribute phải có mặt.',
    'prohibited' => ':attribute bị cấm.',
    'prohibited_if' => ':attribute bị cấm khi :other là :value.',
    'prohibited_unless' => ':attribute bị cấm trừ khi :other là một trong các giá trị :values.',
    'prohibits' => ':attribute cấm :other có mặt.',
    'regex' => 'Định dạng của :attribute không hợp lệ.',
    'required' => ':attribute không được để trống.',
    'required_array_keys' => ':attribute phải chứa các mục cho: :values.',
    'required_if' => ':attribute không được để trống khi :other là :value.',
    'required_if_accepted' => ':attribute không được để trống khi :other được chấp nhận.',
    'required_unless' => ':attribute không được để trống trừ khi :other là một trong các giá trị :values.',
    'required_with' => ':attribute không được để trống khi :values có mặt.',
    'required_with_all' => ':attribute không được để trống khi :values có mặt.',
    'required_without' => ':attribute không được để trống khi :values không có mặt.',
    'required_without_all' => ':attribute không được để trống khi không có giá trị nào trong :values có mặt.',
    'same' => ':attribute và :other phải khớp.',
    'size' => [
        'array' => ':attribute phải chứa :size mục.',
        'file' => ':attribute phải là :size kilobytes.',
        'numeric' => ':attribute phải là :size.',
        'string' => ':attribute phải là :size ký tự.',
    ],
    'starts_with' => ':attribute phải bắt đầu bằng một trong những điều sau: :values.',
    'string' => ':attribute phải là một chuỗi.',
    'timezone' => ':attribute phải là một múi giờ hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => ':attribute tải lên thất bại.',
    'uppercase' => ':attribute phải là chữ hoa.',
    'url' => ':attribute phải là một URL hợp lệ.',
    'ulid' => ':attribute phải là một ULID hợp lệ.',
    'uuid' => ':attribute phải là một UUID hợp lệ.',

    /*
|--------------------------------------------------------------------------
| Dòng Ngôn Ngữ Xác Thực Tùy Chỉnh
|--------------------------------------------------------------------------
|
| Tại đây bạn có thể chỉ định các thông báo xác thực tùy chỉnh cho các thuộc tính
| bằng cách sử dụng quy ước "attribute.rule" để đặt tên các dòng. Điều này giúp
| dễ dàng chỉ định một dòng thông báo tùy chỉnh cụ thể cho một quy tắc thuộc tính nào đó.
|
*/

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'thông báo-tùy-chỉnh',
        ],
    ],

    /*
|--------------------------------------------------------------------------
| Thuộc Tính Xác Thực Tùy Chỉnh
|--------------------------------------------------------------------------
|
| Các dòng ngôn ngữ sau được sử dụng để hoán đổi trình giữ chỗ thuộc tính của chúng tôi
| bằng một cái gì đó dễ đọc hơn như "Địa Chỉ Email" thay vì "email". Điều này giúp chúng tôi
| làm cho thông báo của chúng tôi biểu cảm hơn.
|
*/

    'attributes' => [],

];

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ruleProductCreate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\ProductImageGalleries;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
use Exception;


class ProductController extends Controller
{
    public function uploadFile(Request $request, String $inputName, String $path)
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $ext = $file->extension();
            $fileName = 'media_' . uniqid() . '.' . $ext;
            $file->move(public_path('/uploads' . $path), $fileName);
            return $fileName;
        }
        return null;
    }

    public function index(Request $request)
    {

        $getProduct = Product::getProduct();

        $category = Category::all();
        // tìm kiếm sản phẩm theo tên
        if (!empty(Request()->get('keyword'))) {
            $keyword = trim(Request()->get('keyword'));
            $getProduct->where('name', 'like', '%' . $keyword . '%');
        }

        // lọc theo danh mục
        if ($request->filled('category_id')) {
            $category_id = $request->get('category_id');
            $getProduct->where('category_id', $category_id);
        }

        // lọc sản phẩm theo giá tăng hoặc giảm
        if ($request->filled('sort_price')) {
            $sort_price = trim($request->get('sort_price'));
            if ($sort_price === 'asc' || $sort_price === 'desc') {
                $getProduct->orderBy('price', $sort_price);
            }
        };

        // lọc sản phẩm theo số lượng tăng hoặc giảm
        if ($request->filled('sort_qty')) {
            $sort_qty = $request->get('sort_qty');
            if ($sort_qty === 'asc' || $sort_qty === 'desc') {
                $getProduct->orderBy('qty', $sort_qty);
            }
        };

        // lọc sản phẩm trạng thái
        if ($request->filled('check_status')) {
            $check_status = $request->get('check_status');
            if ($check_status == '1') {
                $getProduct->where('status', 1);
            } elseif ($check_status == '0') {
                $getProduct->where('status', 0);
            }
        };

        // lọc sản phẩm theo ngày đăng mới nhất hoặc ngày đăng cũ nhất
        if ($request->filled('sort_date')) {
            $sort_date = $request->get('sort_date');
            if ($sort_date === 'asc' || $sort_date === 'desc') {
                $getProduct->orderBy('created_at', $sort_date);
            }
        }

        $getProduct = $getProduct->paginate(15)->appends(request()->query());
        // appends(request()->query())  tự động thêm các tham số truy vấn hiện tại vào các liên kết phân trang


        return view('admin.product.index', compact('getProduct', 'category'));
        // return view('admin.product.index', compact('getProduct'));
    }

    public function create()
    {
        $category = Category::where('status', 1)->get();
        return view('admin.product.create', compact('category'));
    }

    public function store(ruleProductCreate $request)
    {
        try {
            $product = new Product();
            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->qty = $request->qty;
            $product->price = $request->price;
            $product->offer_price = $request->offer_price;
            $product->offer_start_date = $request->offer_start_date;
            $product->offer_end_date = $request->offer_end_date;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;
            $product->child_category_id = $request->child_category_id;
            $product->video_link = $request->video_link;
            $product->product_type = $request->product_type;
            $product->status = $request->status;
            $product->weight = $request->weight;
            $product->views = $request->views;
            $product->seo_description = $request->seo_description;
            $product->promotion = $request->promotion;
            $product->long_description = $request->long_description;
            $product->short_description = $request->short_description;
            $product->specifications = $request->specifications;

            // thêm slug nếu không tồn tại thì trích xuất từ name bằng method Str::slug
            $product->slug = !empty($request->slug) ? Str::slug($request->slug, "-") : Str::slug($request->name, "-");
            // Nếu title SEO null lấy name
            $product->seo_title = $request->seo_title ?? $request->name;
            //update hình ảnh
            $product->image = $this->uploadFile($request, 'image', '/products');
            $product->save();

            //Thêm image gallery
            if ($request->hasFile('image_gallery')) {
                foreach ($request->file('image_gallery') as $gallery) {
                    $file_name = 'media_gallery_' . uniqid() . '.' . $gallery->extension(); //uniqid() giúp tạo ra một ID duy nhất
                    $gallery->move(public_path('/uploads/gallery'), $file_name);

                    //Update vào table gallery
                    $image_gallery = new ProductImageGalleries();
                    $image_gallery->image = $file_name;
                    $image_gallery->product_id = $product->id; //product_id lấy từ Product vừa thêm ở trên
                    $image_gallery->save();
                }
            }
            toastr()->success("Thêm " . $request->name . " Thành công");
            return redirect()->back();
        } catch (ValidationException $e) {
            toastr()->error('Lỗi: ' . $e);
        }
    }

    public function edit($id)
    {
        $gallery = ProductImageGalleries::where('product_id', $id)->get('image');
        $category = Category::where('status', 1)->get();
        $product = Product::getProductItem($id);
        return view('admin.product.edit', compact('product', 'category', 'gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'qty' => 'required|min:0',
            'image' => 'image|mimes:jpeg,jpg,png,gif,webp|max:10240',
            'image_gallery' => 'max:10240',
            'price' => 'required',
            'sub_category_id' => 'required',
            'child_category_id' => 'required',
            'specifications' => 'required',
            'promotion' => 'required',
        ], [
            'name' => [
                'required' => 'Tên sản phẩm là bắt buộc.',
                'max' => 'Tên sản phẩm không được dài quá :max ký tự.',
            ],
            'qty' => [
                'required' => 'Số lượng sản phẩm là bắt buộc.',
                'min' => 'Số lượng sản phẩm phải lớn hơn 0.',
            ],
            'image' => [
                'image' => 'File phải là một hình ảnh.',
                'mimes' => 'Hình ảnh phải có định dạng: jpeg,jpg,png,gif,webp.',
                'max' => 'Kích thước hình ảnh không được vượt quá 10MB.',
            ],
            'image_gallery' => [
                'max' => 'Kích thước của thư viện hình ảnh không được vượt quá 10MB.',
            ],
            'price' => [
                'required' => 'Giá sản phẩm là bắt buộc.',
            ],
            'sub_category_id' => [
                'required' => 'Danh mục phụ là bắt buộc.',
            ],
            'child_category_id' => [
                'required' => 'Danh mục con là bắt buộc.',
            ],
            'specifications' => [
                'required' => 'Thông tin sản phẩm không được để trống.',
            ],
            'promotion' => [
                'required' => 'Nội dung khuyến mãi không được để trống.',
            ],
        ]);

        try {
            $product = Product::findOrFail($id);
            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->qty = $request->qty;
            $product->price = $request->price;
            $product->offer_price = $request->offer_price;
            $product->offer_start_date = $request->offer_start_date;
            $product->offer_end_date = $request->offer_end_date;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;
            $product->child_category_id = $request->child_category_id;
            $product->video_link = $request->video_link;
            $product->product_type = $request->product_type;
            $product->status = $request->status;
            $product->weight = $request->weight;
            $product->status = $request->status;
            $product->seo_description = $request->seo_description;
            $product->promotion = $request->promotion;
            $product->long_description = $request->long_description;
            $product->short_description = $request->short_description;
            $product->specifications = $request->specifications;
            // thêm slug nếu không tồn tại thì trích xuất từ name bằng method Str::slug
            $product->slug = !empty($request->slug) ? $request->slug : Str::slug($request->name, "-");
            $product->seo_title = $request->seo_title ?? $request->name;

            // Nếu File image mới tồn tại tiến hành update và xóa ảnh cũ từ thư mục
            if ($request->hasFile('image')) {
                $product->image = $this->uploadFile($request, 'image', '/products');
                //Xóa file ảnh cũ
                if (File::exists(public_path('uploads/products/' . $request->image_old))) {
                    File::delete(public_path('uploads/products/' . $request->image_old));
                }
            } else {
                // Giữ nguyên ảnh cũ
                $product->image = $request->image_old;
            }
            $product->save();

            // Nếu image_gallery tồn tại tiến hành update
            if ($request->hasFile('image_gallery')) {
                // Xóa file ảnh cũ trong uploads
                if (!empty($request->image_gallery_old)) {
                    foreach (json_decode($request->image_gallery_old) as $gal) {
                        if (File::exists(public_path('uploads/gallery/' . $gal->image))) {
                            File::delete(public_path('uploads/gallery/' . $gal->image));
                        }
                    }
                }
                // Lấy gallery của product theo ID và xóa tất cả
                $galleryDel = ProductImageGalleries::where('product_id', $id)->delete();
                foreach ($request->image_gallery as $gal) {
                    $gallery = new ProductImageGalleries();
                    $ext = $gal->extension();
                    $fileName = 'media_gallery_' . uniqid() . '.' . $ext;
                    $gal->move(public_path('uploads/gallery/'), $fileName);
                    $gallery->image = $fileName;
                    $gallery->product_id = $id;
                    $gallery->save();
                }
            }

            toastr()->success('Cập nhật ' . $request->name . ' Thành công');
            return redirect()->back();
        } catch (ValidationException $e) {
            toastr()->error('Lỗi: ' . $e);
        }
    }

    public function show($id)
    {
        $getProduct = Product::with(['variant.variantItem', 'ProductImageGalleries'])->findOrFail($id);
        return response()->json([$getProduct]);
    }
    public function destroy($id)
    {
        try {
            Product::findOrFail($id)->delete();
            return response(['status' => 'success', 'message' => 'Xóa sản phẩm thành công!']);
        } catch (ValidationException $e) {
            return response(['status' => 'error', 'message' => 'Xóa thất bại! ' . $e . '']);
        }
    }
    public function changeStatus(Request $request)
    {
        $product = Product::getProductItem($request->id);
        $product->status = $request->status == 'true' ? 1 : 0;
        $product->save();
        return response(['message' => 'Trạng thái đã thay đổi']);
    }
    public function getChildCategories(Request $request)
    {
        $childCategory = ChildCategory::where('sub_category_id', $request->id)->where('status', 1)->get();
        return $childCategory;
    }
    public function showTrash(Request $request)
    {
        $getProduct = Product::getProductTrashed();
        if (!empty(Request()->get('keyword'))) {
            $keyword = trim(Request()->get('keyword'));
            $getProduct->where('name', 'like', '%' . $keyword . '%');
        }
        $getProduct = $getProduct->paginate(15);
        return view('admin.product.trash-list', compact('getProduct'));
    }

    public function destroyTrash($id)
    {
        try {
            Product::destroyTrashedItem($id);
            $image_gallery = ProductImageGalleries::where('product_id', $id);
            foreach ($image_gallery->get() as $img) {
                if (File::exists(public_path('uploads/gallery/' . $img->image))) {
                    File::delete(public_path('uploads/gallery/' . $img->image));
                }
            }
            $image_gallery->delete();
            return response(['status' => 'success', 'message' => 'Xóa vĩnh viễn thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'Xóa thất bại! ' . $e . '']);
        }
    }

    public function restoreTrash($id)
    {
        try {
            Product::restoreTrashed($id);
            return response(['status' => 'success', 'Khôi phục sản phẩm thành công!']);
        } catch (Exception $e) {
            return response(['status' => 'error', 'message' => 'Khôi phục sản phẩm thất bại!' . $e . '']);
        }
    }
}

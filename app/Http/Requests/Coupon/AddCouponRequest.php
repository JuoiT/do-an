<?php

namespace App\Http\Requests\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class AddCouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:coupons',
            'description' => 'required',
            'status' => 'required|boolean',
            'value' => 'required|numeric|min:0',
            'limit' => 'required|integer|min:0',
            'code' => 'required|min:6',
            'start_at' => 'required|date|after_or_equal:now',
            'end_at' => 'required|date|after_or_equal:start_at',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Tên coupon không được để rỗng!",
            'name.unique' => "Coupon $this->name đã tồn tại!",
            'description.required' => "Mô tả coupon không được để rỗng!",
            'status.required' => "Trạng thái danh mục không được để rỗng!",
            'status.boolean' => "Đừng phá nữa thằng ngu!",
            'value.required' => "Giá giảm không được để rỗng!",
            'value.numeric' => "Giá giảm phải ở dạng số thực!",
            'value.min' => "Giá giảm không được nhỏ hơn 0!",
            'limit.required' => "Số lượng coupon không được để rỗng!",
            'limit.integer' => "Số lượng coupon phải ở dạng số nguyên!",
            'limit.min' => "Số lượng coupon phải lớn hơn 0!",
            'code.required' => "Mã code không được để rỗng!",
            'code.unique' => "Mã code đã tồn tại!",
            'code.min' => "Mã code phải có từ 6 ký tự!",
            'start_at.required' => "Ngày bắt đầu không được để rỗng!",
            'start_at.date' => "Sai định dạng ngày tháng!",
            'start_at.after_or_equal' => "Ngày bắt đầu phải sau bây giờ!",
            'end_at.required' => "Ngày kết thúc không được để rỗng!",
            'end_at.date' => "Sai định dạng ngày tháng!",
            'end_at.after_or_equal' => "Ngày kết thúc phải sau ngày bắt đầu!",
        ];
    }
}

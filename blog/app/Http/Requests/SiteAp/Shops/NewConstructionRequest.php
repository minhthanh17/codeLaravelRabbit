<?php

namespace App\Http\Requests\SiteAp\Shops;

use App\Exceptions\ReshopNaviNotFoundException;
use App\Http\RequestModels\SiteAp\Shops\NewConstructionModel;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class NewConstructionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'shopId' => 'required|integer',
        ];
    }

    /**
     * ルートパラメータをマージする
     * https://laravel.com/docs/9.x/validation#preparing-input-for-validation
     */
    protected function prepareForValidation(): void
    {
        parent::prepareForValidation();

        $this->merge([
            'shopId' => $this->route('shopId'),
        ]);
    }

    /**
     * バリデーションエラー時レスポンスオーバーライド
     *
     * @param  Validator  $validator
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ReshopNaviNotFoundException('not found shop. shop_id='.$this->shopId);
    }

    /**
     * Generate the NewConstructionModel.
     *
     * @return NewConstructionModel
     */
    public function generateNewConstructionModel(): NewConstructionModel
    {
        return new NewConstructionModel(
            shopId: $this->shopId
        );
    }
}

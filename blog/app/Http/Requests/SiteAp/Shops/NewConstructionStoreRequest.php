<?php

namespace App\Http\Requests\SiteAp\Shops;

use App\Http\RequestModels\SiteAp\Shops\NewConstructionStoreModel;
use Illuminate\Foundation\Http\FormRequest;

class NewConstructionStoreRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'shopId' => 'required|integer',
            'caseUrl' => 'nullable|string|max:255',
            'referencePricePerTsuboMinimum' => 'nullable|integer|min:0|max:300',
            'referencePricePerTsuboMaximum' => 'nullable|integer|min:0|max:300',
            'referencePriceMinimum' => 'nullable|integer|min:0|max:9999',
            'referencePriceMaximum' => 'nullable|integer|min:0|max:9999',
            'priceAverage' => 'nullable|integer|min:0|max:9999',
            'title' => 'nullable|string|max:100',
            'publicationPriority' => 'integer',
        ];
    }

    /**
     * Generate the validation messages.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'shopId.required' => '会社IDは入力してください。',
            'shopId.integer' => '会社IDは数値で入力してください。',
            'caseUrl.string' => '建築事例ページのurlは文字列で入力してください',
            'caseUrl.max' => '建築事例ページのurlは255文字以内で入力してください。',
            'referencePricePerTsuboMinimum.integer' => '参考坪単価(min)は数値で入力してください。',
            'referencePricePerTsuboMinimum.min' => '参考坪単価(min)は0万円以上の値で入力してください。',
            'referencePricePerTsuboMinimum.max' => '参考坪単価(min)は300万円以下の値を入力してください。',
            'referencePricePerTsuboMaximum.integer' => '参考坪単価(max)は数値で入力してください。',
            'referencePricePerTsuboMaximum.min' => '参考坪単価(max)は0万円以上の値で入力してください。',
            'referencePricePerTsuboMaximum.max' => '参考坪単価(max)は300万円以下の値を入力してください。',
            'referencePriceMinimum.integer' => '参考本体価格(min)は数値で入力してください。',
            'referencePriceMinimum.min' => '参考本体価格(min)は0万円以上の値で入力してください。',
            'referencePriceMinimum.max' => '参考本体価格(min)は9999万円以下の値を入力してください。',
            'referencePriceMaximum.integer' => '参考本体価格(max)は数値で入力してください。',
            'referencePriceMaximum.min' => '参考本体価格(max)は0万円以上の値で入力してください。',
            'referencePriceMaximum.max' => '参考本体価格(max)は9999万円以下の値を入力してください。',
            'priceAverage.integer' => '平均本体価格は数値で入力してください。',
            'priceAverage.min' => '平均本体価格は0万円以上の値で入力してください。',
            'priceAverage.max' => '平均本体価格は9999万円以下の値を入力してください。',
            'title.string' => '概要文のタイトルは文字列で入力してください',
            'title.max' => '概要文のタイトルは100文字以内で入力してください。',
            'publicationPriority.integer' => '掲載順位フラグを選択してください。',
        ];
    }

    /**
     * Generate the NewConstructionStoreModel.
     *
     * @return NewConstructionStoreModel
     */
    public function generateNewConstructionStoreModel(): NewConstructionStoreModel
    {
        return new NewConstructionStoreModel(
            shopId: $this->shopId,
            caseUrl: $this->caseUrl ?? '',
            referencePricePerTsuboMinimum: $this->referencePricePerTsuboMinimum ?? 0,
            referencePricePerTsuboMaximum: $this->referencePricePerTsuboMaximum ?? 0,
            referencePriceMinimum: $this->referencePriceMinimum ?? 0,
            referencePriceMaximum: $this->referencePriceMaximum ?? 0,
            priceAverage: $this->priceAverage ?? 0,
            title: $this->title ?? '',
            publicationPriority: $this->publicationPriority,
        );
    }
}

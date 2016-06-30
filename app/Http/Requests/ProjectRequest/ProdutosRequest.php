<?php

namespace Modules\Http\Requests\ProjectRequest;

use Modules\Http\Requests\Request;

class ProdutosRequest extends Request
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
            'cod_pro' => 'required:numeric',
            'nome_pro' => 'required',
            'estoque_pro' => 'required',
            'custo_pro' => 'required',
            'venda_pro' => 'required'
        ];
    }

    /*public function messages() {
        return [
            'required' => 'The nome field can not be empty.',
        ];
    }*/
}

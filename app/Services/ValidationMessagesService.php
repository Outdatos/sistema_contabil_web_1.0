<?php

namespace App\Services;

class ValidationMessagesService
{
    public static function messages()
    {
        return [
            'competencia_id.required' => 'O campo competência é obrigatório.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'files_anexos.required' => 'É necessário anexar pelo menos um arquivo.',
            'files_anexos.array' => 'Os anexos devem ser enviados como um array.',
            'files_anexos.*.file' => 'Cada anexo deve ser um arquivo válido.',
            'files_anexos.*.mimes' => 'Cada anexo deve ser do tipo: jpg, jpeg, png, pdf, rar, zip, ofx, xls, xlsx, doc ou docx.',
            'files_anexos.*.max' => 'Cada anexo não deve ser maior que 20MB.',
        ];
    }
}

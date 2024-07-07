<?php

namespace App\Services;

class ValidationMessagesService
 {
    public static function messages()
 {
        return [
            'competencia_id.required' => 'O campo competência é obrigatório.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'files_anexos.required' => 'É necessário selecionar pelo menos um arquivo para anexar.',
            'files_anexos.*.file' => 'O anexo deve ser um arquivo válido.',
            'files_anexos.*.mimes' => 'O anexo deve ser um arquivo dos tipos: pdf, doc, docx.',
            'files_anexos.*.max' => 'O tamanho máximo permitido para cada anexo é de 2048 KB.',
        ];
    }
}

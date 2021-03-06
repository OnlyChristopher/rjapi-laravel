<?php
namespace Modules\V1\Http\Middleware;

use rjapi\extension\BaseFormRequest;

class CategoryTemplateMiddleware extends BaseFormRequest 
{
    // >>>props>>>
    public $id = null;
    // Attributes
    public $title = null;
    public $description = null;
    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
                // TemplatesCategories title
            'title' => 'required|string|max:50',
                // TemplatesCategories Description
            'description' => 'required|string',
        ];
    }

    public function relations(): array 
    {
        return [
            'template',
        ];
    }
    // <<<methods<<<
}

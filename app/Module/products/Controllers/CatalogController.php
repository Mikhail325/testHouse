<?php

namespace App\Module\products\Controllers;

use App\Http\Requests\product\FilterRequest;
use App\Module\products\UseCase\UseCaseCatalog;

use Illuminate\Routing\Controller;

class CatalogController extends Controller
{
    private $useCaseCatalog;
    public function __construct(UseCaseCatalog $useCaseCatalog)
    {
        $this->useCaseCatalog = $useCaseCatalog;
    }
    public function getListProducts(FilterRequest $request)
    {
        $data = $request->validated();
        $list = $this->useCaseCatalog->getListProducts($data);

        if ($list->isEmpty()) {
            throw new \Exception('Товары отсутсвуют');
        }

        $list = $list->forPage($data['page'], 5);

        return response()
            ->json([
                'state' => '200',
                 'data' => $list
            ]);
    }
}

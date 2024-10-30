<?php

namespace App\Module\products\Controllers;

use App\Module\products\UseCase\UseCaseProduct;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    private $useCaseProduct;
    public function __construct(UseCaseProduct $useCaseProduct)
    {
        $this->useCaseProduct = $useCaseProduct;
    }

    public function getFeedbackByProductsId(Request $request, int $id)
    {
        Validator::make($request->all(), [
            'id' => 'required|int',
        ]);

        $product = $this->useCaseProduct->getProductById($id);

        if ($product->feedbacks ->isEmpty()) {
            throw new \Exception("Отзывы у товара c id $id отсутсвуют");
        }

        return response()
            ->json([
                'state' => '200',
                'data' => $product->feedbacks
            ]);
    }

    public function addFeedback(Request $request, int $id)
    {
        Validator::make($request->all(), [
            'id' => 'required|int',
            'feedback'=> 'required|string'
        ]);

        $this->useCaseProduct->addFeedback($id, $request->post('feedback'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);

            $request->Session()->put('Cart', $newCart);
        }

        return view('product.cart');
    }

    public function deleteCartItem(Request $request, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteCart($id);

        if (Count($newCart->products) > 0) {
            $request->Session()->put('Cart', $newCart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('product.cart');
    }

    public function updateCartQuantity(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            if (isset($newCart->products[$id])) {
                $newCart->totalPrice -= $newCart->products[$id]['price'];
                $newCart->totalQuantity -= $newCart->products[$id]['quantity'];

                $newCart->products[$id]['quantity'] = $request->quantity;
                $newCart->products[$id]['price'] = $product->Price * $request->quantity;

                $newCart->totalPrice += $newCart->products[$id]['price'];
                $newCart->totalQuantity += $newCart->products[$id]['quantity'];

                if ($newCart->products[$id]['quantity'] <= 0) {
                    unset($newCart->products[$id]);
                }
            }

            if (count($newCart->products) > 0) {
                $request->session()->put('Cart', $newCart);
            } else {
                $request->session()->forget('Cart');
            }
        }

        return view('product.cart');
    }

    public function checkOut()
    {
        // Tạo đơn hàng và lưu lại
        $order = Order::create([
            'user_id' => Auth()->user()->id,
            'order_date' => now()->format('Y-m-d'), // Sử dụng format thay cho toDateTimeString
            'total' => session()->get('Cart')->totalPrice ? session()->get('Cart')->totalPrice : 0,
            'status' => 1,
        ]);

        // Duyệt qua từng sản phẩm và thêm vào chi tiết đơn hàng
        foreach (session()->get('Cart')->products as $product) {
            OrderDetail::create([
                'order_id' => $order->id, // Lấy ID của đơn hàng vừa tạo
                'product_id' => $product['productInfo']['id'],
                'quantity' => $product['quantity'],
            ]);
        }
        session()->forget('Cart');

        return redirect()->route('customer.index');
    }
}

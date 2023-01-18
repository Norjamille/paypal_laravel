<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class BuyNow extends Component
{

    public $product;

    public function mount($product)
    {
        $this->product = Product::findOrFail($product);
    }
    public function render()
    {
        return view('livewire.buy-now');
    }

    public function approvePayment($transaction)
    {
        $amount = $transaction['amount']['value'];

        auth()->user()->orders()->create([
            'product_id'=>$this->product->id,
            'amount'=>$amount,
            'paid_at'=>now(),
        ]);
        
        session()->flash('order_success',[
            'product_id'=>$this->product->id,
            'message'=>'Thank you for purchasing our products'
        ]);

        return redirect('/');

    }
}

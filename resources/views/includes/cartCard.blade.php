    <ul>
        @foreach ($products as $key =>$product)
            @foreach($product->cartItems as $cartItem)
            <li class="deleteDiv{{ $product->id }}">
                <div class="image_cart_index">
                    <img src="{{ asset('images/dr1.png') }}" alt="">
                </div>
                <div class="text_cart_index">
                    <h4> {{ $product->product_name }} </h4>
                    <div class="rate">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <div class="pris_cart_index">
                    <p> {{ $product->product_price }} رس</p>
                </div>
            </li>
            @endforeach
        @endforeach
        
    </ul>
    <div class="btn_cart_index">
        <a href="{{ route('cartList') }}"> الذهاب إلى عربة التسوق</a>
    </div>


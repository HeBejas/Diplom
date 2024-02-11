<div class="content__block">
    <div class="clothes">
        <div class="content__block-title">
            Каталог {{$catalog_title}}
        </div>
        <div class="clothes__catalog mt-30">
            @if($products->isEmpty())
                Пусто
            @else
                @foreach($products as $key => $product)
                    @if ($key === 0)
                        <div class="clothes__catalog-main_position">
                            <img src="cloth_main_img.jpg">
                            <div class="clothes__catalog__text">
                                <div class="clothes__catalog__text-name">{{$product->name}}</div>
                                <div class="clothes__catalog__text-desc">{{$product->description}}</div>
                                <div class="clothes__catalog__text-price">{{$product->price}} ₽</div>
                            </div>
                        </div>
                    @else
                        <div class="clothes__catalog-position">
                            <img src="cloth_img.jpg">
                            <div class="clothes__catalog__text">
                                <div class="clothes__catalog__text-name">{{$product->name}}</div>
                                <div class="clothes__catalog__text-desc">{{$product->description}}</div>
                                <div class="clothes__catalog__text-price">{{$product->price}} ₽</div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <div class="content__block center content__block-btn">
        <button class="btn main-btn">
            Перейти в каталог
        </button>
    </div>
</div>

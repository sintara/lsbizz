
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 product-filter-col">
    <div class="paralax-center product-filter-img">
        <img class="product-filter-img-top" src="/storage/{{ $product->img }}" alt="{{ $product->name }}" style="">
    </div>
    <div class="product-filter">
        {{-- -- Product Tittle -- --}}
        <div class="product-filter-card">
            <hr class="filter-line-break">
            <a class="product-filter-title">{{ $product->name }}</a>
        </div>
        {{-- -- Product Detail -- --}}
        <div class="product-filter-text">
            <a>CPU {{ $product->cpu_des }}</a><br>
            <a>Memory {{ $product->memory_des }}</a><br>
            <a>Storage {{ $product->storage_des }}</a><br>
            <a>GPU {{ $product->gpu_des }}</a><br>
            <a>Display {{ $product->display_des }}</a><br>
            <a>{{ $product->keyboard }}</a>
        </div>
        {{-- -- Product Price -- --}}
        <div class="product-price">
            <a>{{ $product->new_price }}</a>
        </div>
        {{-- -- Product Buttom -- --}}
        {{-- <a href="javascript:void(0)" data-id="{{$product->id}}" class="btn btn-primary product-filter-buttom" data-toggle="modal"  data-target="#productShow">More Detail</a> --}}
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="productShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
            <input type="text" id="pid" value="">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
        </div>

        </div>
    </div>
</div>

@extends('layouts.admin.layout')
@section('icerik')
    <div class="sections_group">
        <div class="section">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One full width row-->
                    <div class="column one woocommerce-content">
                        <div class="shop-filters">
                            {{$kategori->baslik}}
                        </div>
                        <div class="products_wrapper isotope_wrapper">
                            <ul class="products grid col-4">
                                @foreach($urunler as $yazi)
                                    <li class="post-{{$yazi->id}} product type-product status-publish has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">
                                        <div class="image_frame scale-with-grid product-loop-thumb">
                                            <div class="image_wrapper">
                                                <a href="/urunler/{{$yazi->slug}}.html">
                                                    <div class="mask"></div>
                                                    <img width="500" height="500" src="/images/urunler/{{$yazi->resim}}"
                                                         class="scale-with-grid wp-post-image" alt="{{$yazi->baslik}}"/>
                                                </a>
                                            </div>
                                            <a href="/urunler/{{$yazi->slug}}.html"><span
                                                        class="product-loading-icon added-cart"></span></a>
                                        </div>
                                        <div class="desc">
                                            <h4><a href="/urunler/{{$yazi->slug}}.html">{{$yazi->baslik}}</a></h4>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection
@extends('layouts.admin.layout')
@section('icerik')
    <div class="sections_group">
        <div class="section">
            <div class="section_wrapper clearfix">
                <div class="items_group clearfix">
                    <!-- One full width row-->
                    <div class="column one woocommerce-content">
                        <div itemscope itemtype="http://schema.org/Product" id="product-{{$yazi->id}}"
                             class="post-{{$yazi->id}} product type-product status-publish has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-cat-posters instock">

                            <div class="product_wrapper clearfix">

                                <!-- One Second (1/2) Column -->
                                <div class="column one-second product_image_wrapper">
                                    <div class="image_frame scale-with-grid">
                                        <div class="images image_wrapper">
                                            <a href="/images/urunler/{{$yazi->resim}}"
                                               class="woocommerce-main-image zoom"
                                               title="poster_2_up" data-rel="prettyPhoto[product-gallery]">
                                                <div class="mask"></div>
                                                <img width="500" height="500" src="/images/urunler/{{$yazi->resim}}"
                                                     class="scale-with-grid wp-post-image" alt="{{$yazi->baslik}}"
                                                     title="{{$yazi->baslik}}"/>
                                            </a>
                                            <div class="image_links">
                                                <a href="/images/urunler/{{$yazi->resim}}"
                                                   class="woocommerce-main-image zoom"
                                                   title="poster_2_up"><i class="icon-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnails columns-3"></div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second summary entry-summary">
                                    <h1 class="product_title entry-title">{{$yazi->baslik}}</h1>


                                    <div class="product_meta">
                                        <span class="posted_in">Kategori: <a
                                                    href="/kategori/{{$yazi->kategorisi->slug}}.html"
                                                    rel="tag">{{$yazi->kategorisi->baslik}}</a>.</span>
                                    </div>

                                </div>

                            </div>
                            <div class="accordion">
                                <div class="mfn-acc accordion_wrapper open1st">
                                    <div class="question">
                                        <div class="title">
                                            <i class="icon-plus acc-icon-plus"></i><i
                                                    class="icon-minus acc-icon-minus"></i> Ürün Açıklaması
                                        </div>
                                        <div class="answer">
                                            <p>
                                                {!!$yazi->metin!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
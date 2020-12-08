<!-- Sidebar area-->
<div class="sidebar four columns">
    <div class="widget-area clearfix ">
        <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
            <h3>Ürün Kategorileri</h3>
            <ul class="product-categories">
                @foreach($kategoriler as $kategori)
                    <li class="current drop"><a
                                href="/kategori/{{$kategori->slug}}.html">{{$kategori->baslik}}</a>
                        @if($kategori->altkategori->count())
                            <ul class="dropdown">
                                @foreach($kategori->altkategori as $altkategori)
                                    <li>
                                        <a href="/kategori/{{$altkategori->slug}}.html">{{$altkategori->baslik}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>
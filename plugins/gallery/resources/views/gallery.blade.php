<!-- @if (function_exists('get_galleries'))
    @php $galleries = get_galleries($limit); @endphp
    @if (!$galleries->isEmpty())
        <section class="section pt-50 pb-50">
            <div class="container">
                <div class="page-content">
                    <div class="post-group post-group--single">
                        <div class="post-group__header">
                            <h3 class="post-group__title"><a href="{{ route('public.galleries') }}">{{ trans('plugins.gallery::gallery.galleries') }}</a></h3>
                        </div>
                        <div class="post-group__content">
                            <div class="gallery-wrap">
                                @foreach ($galleries as $gallery)
                                    <div class="gallery-item">
                                        <div class="img-wrap">
                                            <a href="{{ route('public.gallery', ['slug' => $gallery->slug]) }}"><img src="{{ get_object_image($gallery->image, 'medium') }}" alt="{{ $gallery->name }}"></a>
                                        </div>
                                        <div class="gallery-detail">
                                            <div class="gallery-title"><a href="{{ route('public.gallery', ['slug' => $gallery->slug]) }}">{{ $gallery->name }}</a></div>
                                            <div class="gallery-author">{{ trans('plugins.gallery::gallery.by') }} {{ $gallery->user ? $gallery->user->getFullName() : '' }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endif
-->

<div class="row">
    <div class="col-lg-3 pt-5">
        <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
            <h3 class="widget-title">Categories<span class="toggle"></span></h3>
            <ul class="nav nav-list flex-column">                                   <li class="nav-item"><a class="nav-link" href="#">Arts &amp; Crafts</a></li>                                    <li class="nav-item"><a class="nav-link" href="#">Automotive</a></li>                                   <li class="nav-item"><a class="nav-link" href="#">Baby</a></li>                                 <li class="nav-item"><a class="nav-link" href="#">Books</a></li>                                    <li class="nav-item"><a class="nav-link" href="#">Eletronics</a></li>                                   <li class="nav-item"><a class="nav-link" href="#">Women's Fashion</a></li>                                  <li class="nav-item"><a class="nav-link" href="#">Men's Fashion</a></li>                                    <li class="nav-item"><a class="nav-link" href="#">Health &amp; Household</a></li>                                   <li class="nav-item"><a class="nav-link" href="#">Home &amp; Kitchen</a></li>                                   <li class="nav-item"><a class="nav-link" href="#">Military Accessories</a></li>                                 <li class="nav-item"><a class="nav-link" href="#">Movies &amp; Television</a></li>                                  <li class="nav-item"><a class="nav-link" href="#">Sports &amp; Outdoors</a></li>                                    <li class="nav-item"><a class="nav-link" href="#">Tools &amp; Home Improvement</a></li>                                 <li class="nav-item"><a class="nav-link" href="#">Toys &amp; Games</a></li>                             </ul>
        </aside>
    </div>

    <div class="col-lg-9">
        <div class="">

                        <div class="row">
                            <div class="col-lg-6">

                                
                                        <img alt="" height="300" class="img-fluid" src="https://portotheme.com/html/porto/8.0.0/img/products/product-grey-7.jpg">
                                    

                            </div>

                            <div class="col-lg-6">

                                <div class="summary entry-summary">

                                    <h1 class="mb-0 font-weight-bold text-7">Blue Ladies Handbag</h1>

                                    <div class="pb-0 clearfix">
                                        <div title="Rated 3 out of 5" class="float-left">
                                            <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                        </div>

                                        <div class="review-num">
                                            <span class="count" itemprop="ratingCount">2</span> reviews
                                        </div>
                                    </div>

                                    <p class="price">
                                        <span class="amount">$22</span>
                                    </p>

                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. </p>

                                    <form enctype="multipart/form-data" method="post" class="cart">
                                        <div class="quantity quantity-lg">
                                            <input type="button" class="minus" value="-">
                                            <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                        <a href="https://web.whatsapp.com/send?phone=6281281318653&amp;text=bema" target="_blank" class="btn btn-primary btn-modern text-uppercase">
                                        Add to cart
                                        </a>
                                    </form>

                                    <div class="product-meta pt-3">
                                        <span class="posted-in">Categories: <a rel="tag" href="#">Accessories</a>, <a rel="tag" href="#">Bags</a>.</span>
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="tabs tabs-product mb-2">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item active"><a class="nav-link py-3 px-4" href="#productDescription" data-toggle="tab">Description</a></li>
                                        <li class="nav-item"><a class="nav-link py-3 px-4" href="#productInfo" data-toggle="tab">Additional Information</a></li>
                                        
                                    </ul>
                                    <div class="tab-content p-0">
                                        <div class="tab-pane p-4 active" id="productDescription">
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. </p>
                                            <p class="m-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                                        </div>
                                        <div class="tab-pane p-4" id="productInfo">
                                            <table class="table m-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="border-top-0">
                                                            Size:
                                                        </th>
                                                        <td class="border-top-0">
                                                            Unique
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            Colors
                                                        </th>
                                                        <td>
                                                            Red, Blue
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            Material
                                                        </th>
                                                        <td>
                                                            100% Leather
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
</div>
</div>
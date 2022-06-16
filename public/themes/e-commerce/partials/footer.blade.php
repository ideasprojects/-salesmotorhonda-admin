@php
$getPopularTags = app(\Botble\Blog\Repositories\Interfaces\TagInterface::class)->getPopularTags(10);
@endphp

<div class="footer-wrapper">
    <div id="footer" class="footer-1">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <aside id="contact-info-widget-2" class="widget contact-info">
                            <h3 class="widget-title">Kontak Kami</h3>
                            <div class="contact-info contact-info-block">
                                <ul class="contact-details">
                                    <li><i class="far fa-dot-circle"></i><strong>Alamat:</strong><span>Jl. Baung IV No 3 (Ruko Honda)<br>Depan Apartemen Kebagusan City, Kebagusan, Pasar Minggu - Jakarta Selatan.</span></li>
                                    <li><i class="fab fa-whatsapp"></i><strong>Telepon:</strong><span>0812 8131 8653</span></li>
                                    <li><i class="far fa-envelope"></i><strong>Email:</strong><span><a href="mailto:faturahmanbema22@gmail.com">faturahmanbema22@gmail.com</a></span></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3">
                        <aside id="text-8" class="widget widget_text">
                            <h3 class="widget-title">Bekerja Sama Dengan Leasing </h3>
                            <div class="textwidget">
                                <ul>
                                    <li><a href="#">FIF</a></li>
                                    <li><a href="#">Mega Finance</a></li>
                                    <li><a href="#">Adira</a></li>
                                    <li><a href="#">OTO</a></li>
                                    <li><a href="#">WOM Finance</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3">
                        <aside id="woocommerce_product_tag_cloud-2" class="widget woocommerce widget_product_tag_cloud">
                            <h3 class="widget-title">Populer Tags</h3>
                            <div class="tagcloud">
                                @foreach ($getPopularTags as $tag)
                                <a href="{{ route('public.tag', $tag->slug) }}" class="tag-cloud-link tag-link-33 tag-link-position-1" style="font-size: 8pt;">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3">
                        <aside id="text-7" class="widget widget_text">
                            <h3 class="widget-title">Tentang Kami</h3>
                            <div class="textwidget">
                                <p>Dapatkan motor impian anda bersama kami, Proses Mudah, Harga Bersahabat, Pelayanan Bagus. Kami bantu sampai di acc.</p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-left"><span class="footer-copyright">© {{ setting('copyright_footer') }} 2021. All Rights Reserved</span></div>
                <div class="footer-right">
                    <aside id="follow-us-widget-2" class="widget follow-us">
                            <div class="share-links">
                                <a href="https://www.facebook.com/bema.faturahman.1" rel="nofollow" target="_blank" title="Facebook" class="share-facebook">Facebook</a>
                                <!-- <a href="#" rel="nofollow" target="_blank" title="Twitter" class="share-twitter">Twitter</a> -->
                                <a href="https://www.instagram.com/kredit_cash_motor_honda/" rel="nofollow" target="_blank" title="Instagram" class="share-instagram">Instagram</a>
                            </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
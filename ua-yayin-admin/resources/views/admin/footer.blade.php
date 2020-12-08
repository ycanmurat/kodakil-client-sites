<!-- Footer-->
<footer id="Footer" class="clearfix">
    <!-- Footer - First area -->
    <div class="footer_action">
    </div>
    <div class="widgets_wrapper">
        <div class="container">
            <div class="one-fourth column">
                <!-- Text Area -->
                <aside id="text-7" class="widget widget_text">
                    <div class="textwidget"><img src="/images/logo_footer.png" alt=""/>
                        <p>
                            <span class="big">We love who we are and we are very proud to be the part of your business</span>
                        </p>
                        <p>
                            Curabitur sit amet magna quam. Praesent in libero vel <span class="tooltip"
                                                                                        data-tooltip="Quis accumsan dolor">turpis pellentesque</span>
                            egestas sit amet vel nunc. Nunc lobortis dui neque quis.
                        </p>
                        <a href="https://www.facebook.com/{{$ayar->facebook}}" class="icon_bar icon_bar_facebook icon_bar_small">
                            <span class="t">
                                <i class="icon-facebook"></i>
                            </span>
                            <span class="b">
                                <i class="icon-facebook"></i>
                            </span>
                        </a>
                        <a href="#" class="icon_bar icon_bar_google icon_bar_small">
                            <span class="t">
                                <i class="icon-gplus"></i>
                            </span>
                            <span class="b">
                                <i class="icon-gplus"></i>
                            </span></a>
                        <a href="#" class="icon_bar icon_bar_twitter icon_bar_small">
                            <span class="t">
                                <i class="icon-twitter"></i>
                            </span>
                            <span class="b">
                                <i class="icon-twitter"></i>
                            </span>
                        </a>
                        <a href="#" class="icon_bar icon_bar_vimeo icon_bar_small">
                            <span class="t">
                                <i class="icon-vimeo"></i>
                            </span>
                            <span class="b">
                                <i class="icon-vimeo"></i>
                            </span>
                        </a>
                        <a href="#" class="icon_bar icon_bar_youtube icon_bar_small">
                            <span class="t">
                                <i class="icon-play"></i>
                            </span>
                            <span class="b">
                                <i class="icon-play"></i>
                            </span>
                        </a>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Recent Comments Area -->
                <aside id="widget_mfn_recent_comments-3" class="widget widget_mfn_recent_comments">
                    <h4>Recent comments</h4>
                    <div class="Recent_comments">
                        <ul>
                            <li>
                                <span class="date_label">March 31, 2015</span>
                                <p>
                                    <i class="icon-user"></i><strong>Muffin Group</strong> commented on <a
                                            href="blog-single-content-builder.html#comment-7"
                                            title="Muffin Group | Content builder for posts">Content builder for
                                        posts</a>
                                </p>
                            </li>
                            <li>
                                <span class="date_label">March 31, 2015</span>
                                <p>
                                    <i class="icon-user"></i><strong>Muffin Group</strong> commented on <a
                                            href="blog-single-content-builder.html#comment-6"
                                            title="Muffin Group | Content builder for posts">Content builder for
                                        posts</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Recent posts -->
                <aside id="widget_mfn_recent_posts-3" class="widget widget_mfn_recent_posts">
                    <h4>Latest posts</h4>
                    <div class="Recent_posts">
                        <ul>
                            @foreach($sayfalar as $sayfa)
                                <li class="post format-"><a
                                            href="/sayfa/{{$sayfa->id}}/{{$sayfa->slug}}">{{$sayfa->baslik}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <!-- Text Area -->
                <aside id="text-8" class="widget widget_text">
                    <h4>Some features</h4>
                    <div class="textwidget">
                        <ul class="list_mixed">
                            <li class="list_check">
                                Suspendisse a pellentesque dui, non felis.
                            </li>
                            <li class="list_star">
                                Quisque lorem tortor fringilla sed.
                            </li>
                            <li class="list_idea">
                                Quisque cursus et, porttitor risus.
                            </li>
                            <li class="list_check">
                                Nulla ipsum dolor lacus, suscipit.
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Footer copyright-->
    <div class="footer_copy">
        <div class="container">
            <div class="column one">
                <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i
                                class="icon-up-open-big"></i></span></a>
                <div class="copyright">
                    &copy; 2019 <a
                            href="https://www.hillbilisim.com"
                            target="_blank">Emre | Murat ( MakingKnowing )</a>
                </div>
                <!--Social info area-->
                <ul class="social">
                    <li class="facebook">
                        <a href="https://www.facebook.com/{{$ayar->facebook}}" title="Facebook"><i
                                    class="icon-facebook"></i></a>
                    </li>
                    <li class="googleplus">
                        <a href="https://plus.google.com/{{$ayar->google}}" title="Google+"><i
                                    class="icon-gplus"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/{{$ayar->twitter}}" title="Twitter"><i
                                    class="icon-twitter"></i></a>
                    </li>
                    <li class="pinterest">
                        <a href="https://www.pinterest.com/{{$ayar->pinterest}}" title="Pinterest"><i
                                    class="icon-pinterest"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
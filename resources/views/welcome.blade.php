@extends('layouts.body')
@section('title')
    <title>Newspaper</title>
@endsection
@section('content')

    <section class="news-feed">
        <div class="container">
            <div class="row row-margin">
                <div class="col-sm-3 hidden-xs col-padding">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="">
                                <img class="entry-thumb" src="{{ asset('assets/images/slider/slide-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-1">FASHION </span>
                            <h3 class="post-title post-title-size"><a href="home-style-one.html#" rel="bookmark">The 20
                                    free things in Sydney with your girlfriend </a></h3>
                            <div class="post-editor-date">

                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>

                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>

                                <a class="readmore pull-right" href=""><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6 col-padding">
                    <div id="news-feed-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="">
                                        <img class="entry-thumb" src="{{ asset('assets/images/slider/slide-02.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-2">FASHION </span>
                                    <h3 class="post-title"><a href="" rel="bookmark">The 20 free
                                            things in Sydney with your girlfriend </a></h3>
                                    <div class="post-editor-date">

                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>

                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>

                                        <a class="readmore pull-right" href=""><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="">
                                        <img class="entry-thumb" src="{{ asset('assets/images/slider/slide-03.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-3">FASHION </span>
                                    <h3 class="post-title"><a href="" rel="bookmark">The 20 free
                                            things in Sydney with your girlfriend </a></h3>
                                    <div class="post-editor-date">

                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>

                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>

                                        <a class="readmore pull-right" href=""><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="home-style-one.html#">
                                        <img class="entry-thumb" src="{{ asset('assets/images/slider/slide-04.jpg') }}"
                                            alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-4">FASHION </span>
                                    <h3 class="post-title"><a href="" rel="bookmark">The 20 free
                                            things in Sydney with your girlfriend </a></h3>
                                    <div class="post-editor-date">

                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>

                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>

                                        <a class="readmore pull-right" href=""><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 hidden-xs col-padding">
                    <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                        <div class="post-thumb img-zoom-in">
                            <a href="">
                                <img class="entry-thumb" src="{{ asset('assets/images/slider/slide-05.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="post-info">
                            <span class="color-5">FASHION </span>
                            <h3 class="post-title post-title-size"><a href="" rel="bookmark">The 20
                                    free things in Sydney with your girlfriend </a></h3>
                            <div class="post-editor-date">

                                <div class="post-date">
                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                </div>

                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>

                                <a class="readmore pull-right" href=""><i class="pe-7s-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">

                <section class="recent_news_inner">
                    <h3 class="category-headding ">Recent Posts</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide" class="owl-carousel">
                            @foreach ($posts as $post)
                                <div class="item home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">

                                        <div class="post-thumb">
                                            <a href="   ">
                                                <img class="img-responsive" src="{{ asset('storage/' . $post->image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            <div class="slide">
                                                <a target="_blank" href="{{ route('postus.show', $post->id) }}"
                                                    class="post-badge " style="background: #d91897">{{ $post->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href="">{{ $post->name }}</a></h3>
                                    <div class="post-title-author-details">
                                        <div class="date">
                                            <ul>
                                                <li>By <a title="" href=""><span>{{ $post->author }}</span></a>
                                                    --</li>

                                                <li><a title=""
                                                        href="">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</a>
                                                </li>
                                                <li><a title="" href=""><span>{{ count($post->comment) }}
                                                            comments</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p><a href="{{ route('postus.show', $post->id) }}"
                                                style="color:#333;font-family:sans-serif">{!! Str::limit($post->description, 100) !!}Read
                                                more...</a></p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>



                <div class="ads">
                    <a href=""><img src="{{ asset('assets/images/top-bannner2.jpg') }}"
                            class="img-responsive center-block" alt=""></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 left-padding">


                <h3 class="category-headding ">SOCIAL PIXEL</h3>
                <div class="headding-border"></div>
                <div class="social">
                    <ul>
                        <li><a href="" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                        <li><a href="" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                        <li><a href="" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                        <li><a href="" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                    </ul>
                </div>


                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="">Latest Posts</a></li>
                    </ul>
                    <hr>

                    <div class="tab_content">
                        <div class="tab-item-inner">
                            @foreach ($popular as $key => $popula)
                                <div class="box-item">
                                    <div class="img-thumb">
                                        <a href="" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('storage/' . $popula->image) }}" alt="" height="80"
                                                width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="">{{ $popula->name }}</a>
                                        </h6>
                                        <h3 class="td-module-title"><a
                                                href="{{ route('postus.show', $popula->id) }}">{!! Str::limit($popula->description, 30) !!}</a>
                                        </h3>
                                        <div class="post-editor-date">

                                            <div class="post-date">
                                                <i
                                                    class="pe-7s-clock">{{ Carbon\Carbon::parse($popula->created_at)->diffForHumans() }}</i>
                                            </div>

                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                {{ count($popula->comment) }} comments </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>



                    </div>

                </div>

            </div>

        </div>

    </div>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="footer-box">
                        <h3 class="category-headding">Categories</h3>
                        <div class="headding-border"></div>
                        @foreach ($categories as $key => $category)
                            <a class="tag" href="" title="">{{ $category->name }}</a>
                        @endforeach
                        <div class="newsletter-inner">

                            <h3 class="category-headding ">NEWSLETTER</h3>
                            <div class="headding-border"></div>
                            <p>Enter your email address for our mailing list!</p>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"
                                required>
                            <button type="button" class="btn btn-style">Subscribe</button>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-box">

                        <h3 class="category-headding ">Latest News</h3>
                        <div class="headding-border bg-color-2"></div>
                        @foreach ($latest as $key => $late)
                            <div class="box-item wow fadeIn" data-wow-duration="2s">
                                <div class="img-thumb">
                                    <a href="" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('storage/' . $late->image) }}" alt="" height="80"
                                            width="100"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                        <a href="">{{ $late->name }}</a>
                                    </h6>
                                    <h3 class="td-module-title"><a
                                            href="{{ route('postus.show', $late->id) }}">{!! Str::limit($late->description, 100) !!}</a></h3>
                                    <div class="post-editor-date">

                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>
                                            {{ Carbon\Carbon::parse($late->created_at)->diffForHumans() }}
                                        </div>

                                        <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                            {{ count($late->comment) }} comments</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="footer-box">

                        <h3 class="category-headding">Galleries</h3>
                        <div class="headding-border bg-color-3"></div>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </td>
                                    <td><a href="">This is FINLAND</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </td>
                                    <td><a href="">Public Storage Canada</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </td>
                                    <td><a href="">Bloomberg Professional</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </td>
                                    <td><a href="">Ringling Bros. and </a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </td>
                                    <td><a href="">The Official Star Wars Blog</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </td>
                                    <td><a href="">US Air Force General Chuck Yeager</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>
    </footer>
@endsection

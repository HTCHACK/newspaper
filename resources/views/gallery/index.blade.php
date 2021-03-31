@extends('layouts.body')
@section('title')
    <title>Newspaper | Gallery</title>
@endsection


@section('content')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Galleries</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{ route('home') }}" title="">Home</a></li>
                            <li><a href="{{ route('ourgallery.index') }}" title="">Galleries</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

        <div class="row">

            <div id="content-slide-4" class="owl-carousel">
                @foreach ($galleries as $key => $gallery)
                    <div class="item">
                        <div class="post-wrapper post-grid-8 wow fadeIn" data-wow-duration="2s" style="height: 400px">
                            <div class="post-thumb img-zoom-in" style="height: 400px">
                                <a href="">
                                    <img class="entry-thumb-bottom" style="height: 400px"
                                        src="{{ asset('storage/' . $gallery->image) }}" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-4">{{ $gallery->name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <h1 style="text-align:center">Galleries</h1>
            @foreach ($galleries as $key => $gallery)
                <div class="col-sm-12 col-md-3">

                    <div class="post-style2 archive-post-style-2">
                        <a href=""><img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->name }}"
                                width="225px" height="200px"></a>
                    </div>
                </div>
            @endforeach
        </div>

        {!! $galleries->links() !!}
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

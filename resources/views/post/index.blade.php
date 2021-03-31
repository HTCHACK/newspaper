@extends('layouts.body')
@section('title')
    <title>News | Post</title>
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="tab-inner">
                <ul class="tabs">
                    @foreach ($categories as $key => $category)
                        <li><a  href="#{{ $category->id }}" title="">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
                <hr>

                <div class="tab_content">
                    @foreach ($categories as $key => $cat)
                        <div class="tab-item-inner {{ $key == 1 ? 'active' : null }}" id="{{ $cat->id }}">

                            @foreach ($cat->post as $key => $po)
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <a href="" rel="bookmark"><img class="entry-thumb"
                                                src="{{ asset('storage/' . $po->image) }}" alt="" height="80"
                                                width="90"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="home-style-four.html#">SPORTS</a>
                                        </h6>
                                        <h3 class="td-module-title"><a
                                                href="{{ route('postus.show', $po->id) }}">{!! Str::limit($po->description, 50) !!}</a>
                                        </h3>
                                        <div class="post-editor-date">

                                            <div class="post-date">
                                                <i
                                                    class="pe-7s-clock"></i>{{ Carbon\Carbon::parse($po->created_at)->diffForHumans() }}
                                            </div>

                                            <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                {{ count($po->comment) }} comments </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    {!! $post->links() !!}
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
                            <a class="tag" href="{{ $category->id }}"
                                title="">{{ $category->name }}</a>

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

                        <h3 class="category-headding ">Latest NEWS</h3>
                        <div class="headding-border bg-color-2"></div>
                        @foreach ($posts as $news)
                            <div class="box-item wow fadeIn" data-wow-duration="2s">
                                <div class="img-thumb">
                                    <a href="" rel="bookmark"><img class="entry-thumb"
                                            src="{{ asset('storage/' . $news->image) }}" alt="" height="80"
                                            width="100"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                        <a href="">{{ $news->name }}</a>
                                    </h6>
                                    <h3 class="td-module-title"><a
                                            href="{{ route('postus.show', $news->id) }}">{!! Str::limit($news->description, 100) !!}</a></h3>
                                    <div class="post-editor-date">

                                        <div class="post-date">
                                            <i
                                                class="pe-7s-clock"></i>{{ Carbon\Carbon::parse($news->created_at)->diffForHumans() }}
                                        </div>

                                        <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                            {{ count($news->comment) }} comments </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="footer-box">

                        <h3 class="category-headding">TOP RATED</h3>
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

@extends('layouts.body')
@section('title')
    <title>Newspaper | Post Details</title>
@endsection

@section('content')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Post Detail</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{ route('home') }}" title="">Home</a></li>
                            <li><a href="{{ route('home') }}" title="">Posts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive post-image" alt="">
                        <div class="social">
                            <ul>
                                <li><a href="" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                                <li><a href="" class="twitter"><i class="fa  fa-paper-plane"></i><span>3987</span></a></li>
                                <li><a href="" class="google"><i class="fa  fa-youtube"></i><span>3987</span></a></li>
                                <li><a href="" class="flickr"><i class="fa fa-instagram"></i><span>3987</span> </a></li>
                            </ul>
                        </div>

                    </div>
                    <h1>{{ $post->name }}</h1>
                    <div class="date">
                        <ul>
                            <li>By <a title="" href="details-style-one.html#"><span>{{ $post->author }}</span></a> --
                            </li>
                            <li><a title="" href="details-style-one.html#">{{ $post->created_at }}</a> --</li>
                            <li><a title="" href="details-style-one.html#"><span>{{ count($comments) }}
                                        comments</span></a>
                            </li>
                        </ul>
                    </div>
                    <p>{!! $post->description !!}</p>


                    <div class="qtrotator">
                        <div class="qtcontent">
                            <blockquote>
                                {!! Str::limit($post->description, 120) !!}
                            </blockquote>
                        </div>
                    </div>


                    <div class="form-area">
                        <h3 class="category-headding ">LEAVE A COMMENT</h3>
                        <div class="headding-border"></div>
                        <form method="post" action="{{ route('comments.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="input-1" name="name">
                                        <label class="input_label" for="input-1">
                                            <span class="input_label_content" data-content="Your Name">Your Name</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="phone_number_2 input_field" type="text" id="phone" name="phone_number"
                                            placeholder="(998)-9_-___-__-__" value="(998)">
                                        <input type="hidden" name="id" value="{{ $post->id }}">
                                    </span>
                                </div>

                                <div class="col-sm-12">
                                    <span class="input">
                                        <textarea class="input_field" id="message" name="comment"></textarea>
                                        <label class="input_label" for="message">
                                            <span class="input_label_content" data-content="Your Comment">Your
                                                Comment</span>
                                        </label>
                                    </span>
                                    <button type="submit" class="btn btn-style">Post Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="comments-container">
                        <h1>Comment {{ count($comments) }} </h1>

                        <ul id="comments-list" class="comments-list">

                            @foreach ($comments as $key => $commen)


                                <li>
                                    <div class="comment-main-level">

                                        <div class="comment-avatar"><img src="{{ asset('assets/images/user.webp') }}"
                                                class="img-circle" alt=""></div>

                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name">
                                                    <a href="">{{ $commen->name }}
                                                    </a>
                                                </h6>
                                                <span>{{ $commen->phone_number }}</span>
                                                <i>{{ Carbon\Carbon::parse($commen->created_at)->diffForHumans() }}</i>
                                            </div>
                                            <div class="comment-content">
                                                Post ID =>[{{ $commen->post_id }}]: {{ $commen->comment }}

                                                <i class="pe-7s-comment"
                                                    onclick="getElementById('reply').style.display='block'"
                                                    style="float:right"></i>

                                            </div>
                                            <div class="form-area">
                                                
                                                <form method="post" action="{{ route('reply.add') }}" id="reply" style="display:none">
                                                    <div class="comment-content" style="margin-bottom:2rem;">
                                                        <i class="fa fa-arrow-up"
                                                        onclick="getElementById('reply').style.display='none'"
                                                        style="float:right"></i>
                                                    </div>
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <span class="input">
                                                                <input class="input_field" type="text" id="input-1" name="name">
                                                                <label class="input_label" for="input-1">
                                                                    <span class="input_label_content" data-content="Your Name">Your Name</span>
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <span class="input">
                                                                <input class="phone_number_2 input_field" type="text" id="phone" name="phone_number"
                                                                    placeholder="(998)-9_-___-__-__" value="(998)">
                                                                <input type="hidden" name="id" value="{{ $post->id }}">
                                                            </span>
                                                        </div>
                        
                                                        <div class="col-sm-12">
                                                            <span class="input">
                                                                <textarea class="input_field" id="message" name="comment"></textarea>
                                                                <label class="input_label" for="message">
                                                                    <span class="input_label_content" data-content="Your Comment">Your
                                                                        Comment</span>
                                                                </label>
                                                            </span>
                                                            <button type="submit" class="btn btn-style">Reply</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-sm-4 left-padding">
                <aside class="sidebar">
                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="">Latest Post</a></li>
                        </ul>
                        <hr>

                        <div class="tab_content">
                            <div class="tab-item-inner">
                                @foreach ($popular as $key => $pop)
                                    <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <div class="img-thumb">
                                            <a href="" rel="bookmark"><img class="entry-thumb"
                                                    src="{{ asset('storage/' . $pop->image) }}" alt="" height="80"
                                                    width="90"></a>
                                        </div>
                                        <div class="item-details">
                                            <h6 class="sub-category-title bg-color-4">
                                                <a href="">{{ $pop->name }}</a>
                                            </h6>
                                            <h3 class="td-module-title"><a
                                                    href="{{ route('postus.show', $pop->id) }}">{!! Str::limit($pop->description, 50) !!}</a>
                                            </h3>
                                            <div class="post-editor-date">

                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i>
                                                    {{ Carbon\Carbon::parse($pop->created_at)->diffForHumans() }}
                                                </div>

                                                <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                    {{ count($pop->comment) }} comments </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>



                        </div>

                    </div>


                    <div class="latest-comments-inner">
                        <h3 class="category-headding ">LATEST COMMENT</h3>

                        <div class="headding-border"></div>
                        @foreach ($latestcomments as $key => $comment)
                            <div class="post-style2 latest-com">
                                <img src="{{ asset('assets/images/user.webp') }}" alt="">
                                <div class="latest-com-detail">
                                    <h5><a href="" title="">{{ $comment->name }}</a> |
                                        {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }} </h5>
                                    <span>{{ $comment->phone_number }}</span>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </aside>
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
                            <a class="tag" href="">{{ $category->name }}</a>
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

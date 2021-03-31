@extends('layouts.body')
@section('title')
    <title>Newspaper | Contact</title>
@endsection


@section('content')


    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Contact</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{route('home')}}" title="">Home</a></li>
                            <li><a href="{{route('contactus.index')}}" title="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-title-2">
                    <h2>Contact Us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        <br> has been the industry's standard dummy text ever
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="contact-address-2">

                    <div class="contact-icon-inner"><i class="pe-7s-map-2 top-icon"></i></div>
                    <h3>Address</h3>
                    <ul>
                        <li>14L.E Goulburn St, </li>
                        <li>Sydney 2000NSW</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-address-2">

                    <div class="contact-icon-inner"><i class="pe-7s-headphones top-icon"></i></div>
                    <h3>Phone</h3>
                    <ul>
                        <li><i class="fa fa-mobile"></i> +8801620214460</li>
                        <li><i class="fa fa-mobile"></i> +8801821450144</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-address-2">

                    <div class="contact-icon-inner"><i class="pe-7s-global top-icon"></i> </div>
                    <h3>Email</h3>
                    <ul>
                        <li><i class="fa fa-envelope-o"></i> <a
                                href="https://news365htmllatest.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="4321273722302803242e222a2f6d202c2e">[email&#160;protected]</a></li>
                        <li><i class="fa fa-globe"></i> www.companyweb.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-form-area-2">


                    <div class="row">
                        <div class="col-sm-6">
                            <div id="map" style="height: 600px">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191885.50263675497!2d69.13928277818499!3d41.28251254609851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0xa5a9323b4aa5cb98!2z0KLQvtGI0LrQtdC90YI!5e0!3m2!1suz!2s!4v1615630028164!5m2!1suz!2s"
                                    width="100%  " height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul style="list-style:none;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @elseif (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('contacts.store') }}">
                                @csrf
                                <span class="input">
                                    <input class="input_field" type="text" id="input-1" name="name">
                                    <label class="input_label" for="input-1">
                                        <span class="input_label_content" id="f_name"  data-content="Name">
                                            Name</span>
                                    </label>
                                </span>
                                <span class="input">
                                    <input class="phone_number_2 input_field" type="text" id="phone"  name="phone_number"  placeholder="(998)-9_-___-__-__" value="(998)">
                                </span>

                                <span class="input">
                                    <textarea class="input_field" id="message" name="message"></textarea>
                                    <label class="input_label" for="message">
                                        <span class="input_label_content" data-content="Your Message" >Your
                                            Message</span>
                                    </label>
                                </span>
                                <span class="input">
                                    <div  class="g-recaptcha" data-sitekey="6LfiwHUaAAAAAOLfJ9mSNZDpwMKDBiw9Vub9WLSo"></div>
                                </span>
                                <button type="submit" class="btn btn-style btn-block">Submit</button>
                            </form>
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

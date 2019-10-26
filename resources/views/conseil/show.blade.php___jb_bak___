@extends("welcome")

@section("content")
    <div class="main-content blog-post-container blog-page space-margin-top-0">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Conseil</a></li>
                <li class="active">{{ $conseil->titre }}</li>
            </ul>
            <div class="col-md-9 blog-colum-left blog-post-item">
                <div class="image">
                    <img src="/categorie/{{ $conseil->image }}" alt="" />
                </div>
                <h3>{{ $conseil->titre }}.</h3>
                <p class="post-date"><i class="fa fa-calendar"></i>16 December, 2015</p>
                <div class="content">
                  {!! $conseil->desctiption !!}
                </div>
                {!! $conseil->desctiption !!}
                <p class="posted space-40">
                    <i class="fa fa-pencil-square-o"></i>
                    Publié  <a href="#" title="">{{ $conseil->user->name }}</a>
                </p>
                <div class="share-tags">
                    <div class="share">
                        <span>Share to friends</span>
                        <a href="#" title="vi"><i class="fa fa-vine"></i></a>
                        <a href="#" title="vi"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="vi"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="vi"><i class="fa fa-youtube"></i></a>
                    </div>
                    <div class="tags">
                        <span>tags:</span>
                        <a href="#" title="Fashion">Fashion</a>
                        <a class="active" href="#" title="Pixel-Creative">Pixel-Creative</a>
                    </div>
                </div>
                <!-- End Share-tags -->
                <div class="profile space-padding-tb-40 space-30">
                    <div class="avatar">
                        <img src="assets/images/Futurelife-about1.jpg" alt="Futurelife-about" />
                    </div>
                    <div class="text">
                        <h3>Artice by Pixel-Creative</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
                <div class="title-product">
                    <h3>post comment</h3>
                </div>
                <!-- End title-product -->
                <div class="contact-content">
                    <h4>Submit Content</h4>
                    <div class="col-md-12 space-padding-bt-50 contact-form post-comment">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class=" control-label" for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="inputEmail">Email</label>
                                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class=" control-label" for="message">Comment</label>
                                <textarea class="form-control" id="message" name="comment"></textarea>
                                <div class="checkbox space-10">
                                </div>
                                <button class="btn link-button" type="submit">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End contact content -->
            </div>
            <div class="widget-area col-xs-12 col-md-3 blog-colum-right">
                <aside class="widget">
                    <h3 class="widget-title">popular</h3>
                    <ul>
                        <li><a title="Categories" href="#">Categories</a></li>
                        <li><a title="News" href="#">News</a></li>
                        <li><a title="Event" href="#">Event</a></li>
                    </ul>
                </aside>
                <aside class="widget">
                    <h3 class="widget-title">Blog</h3>
                    <ul>
                        <li><a title="Categories" href="#">Categories</a></li>
                        <li><a title="News" href="#">News</a></li>
                        <li><a title="Event" href="#">Event</a></li>
                    </ul>
                </aside>
                <aside class="widget">
                    <h4>Recent Post</h4>
                    <ul>
                        <li><a title="A sample blog title #1" href="#">A sample blog title #1</a></li>
                        <li><a title="A sample blog title #2" href="#">A sample blog title #2</a></li>
                        <li><a title="A sample blog title #3" href="#">A sample blog title #3</a></li>
                        <li><a title="A sample blog title #4" href="#">A sample blog title #4</a></li>
                    </ul>
                </aside>
            </div>
        </div>
        <!-- End container -->
    </div>
@endsection
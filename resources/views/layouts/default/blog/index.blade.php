
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area" style="background-image: url('{{ asset('uploads/images/banner/'.$breadcum->image)}}');">
      <div class="banner_overlay">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_box text-center">
                      <h2 class="breadcrumb-title">Blog</h2>
                      <!-- breadcrumb-list start -->
                      <ul class="breadcrumb-list">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active">Blog</li>
                      </ul>
                      <!-- breadcrumb-list end -->
                  </div>
              </div>
          </div>
      </div>
      </div>
  </div>
  <!-- breadcrumb-area end -->











  <div id="main-wrapper">
      <div class="site-wrapper-reveal">
          <!--====================  Blog Area Start ====================-->
          <div class="blog-pages-wrapper section-space--ptb_100">
              <div class="container">
                  <div class="row">
                    @if ($posts)
                    @foreach($posts as $post) 
                      <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                          <!--======= Single Blog Item Start ========-->
                          <div class="single-blog-item blog-grid">
                              <!-- Post Feature Start -->
                              <div class="post-feature blog-thumbnail">
                                  <a href="{{ url('posts/read/'.$post->alias) }}">
                                    @if(File::exists(public_path('uploads/images/'.$post->image)))
                                        <img class="img-fluid" src="uploads/images/{{ $post->image }}" alt="Blog Images">
                                    @else
                                        <img src="uploads/images/notfound.jpg" alt="">
                                    @endif
                                  </a>
                              </div>
                              <!-- Post Feature End -->

                              <!-- Post info Start -->
                              <div class="post-info lg-blog-post-info">
                                  <div class="post-meta">
                                      <div class="post-date">
                                          <span class="far fa-calendar meta-icon"></span>
                                          {{ date("M j, Y " , strtotime($post->created)) }}
                                      </div>
                                  </div>

                                  <h5 class="post-title font-weight--bold">
                                      <a href="{{ url('posts/read/'.$post->alias) }}">{{ \Illuminate\Support\Str::limit($post->title, 40)   }}</a>
                                  </h5>

                                  <div class="post-excerpt mt-15">
                                      {!! \Illuminate\Support\Str::limit($post->note, 100) !!}
                                  </div>
                                  <div class="btn-text">
                                      <a href="{{ url('posts/read/'.$post->alias) }}">Read more <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                                  </div>
                              </div>
                              <!-- Post info End -->
                          </div>
                          <!--===== Single Blog Item End =========-->
                      </div>
                      @endforeach
                      @endif
                   


                      <div class="col-lg-12 wow move-up">
                          <div class="ht-pagination mt-30 pagination justify-content-center">
                              <div class="pagination-wrapper">

                                  {{-- <ul class="page-pagination">
                                      <li><a class="prev page-numbers" href="#">Prev</a></li>
                                      <li><a class="page-numbers current" href="#">1</a></li>
                                      <li><a class="page-numbers" href="#">2</a></li>
                                      <li><a class="next page-numbers" href="#">Next</a></li>
                                  </ul> --}}
                                  {!!  $posts->links() !!}
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <!--====================  Blog Area End  ====================-->











          <!--========== Call to Action Area Start ============-->
          <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-xl-8 col-lg-7">
                          <div class="cta-content md-text-center">
                              <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-5">
                          <div class="cta-button-group--one text-center">
                              <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                              <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--========== Call to Action Area End ============-->








      </div>

















{{-- @include('layouts.default.blog.widget') --}}
             
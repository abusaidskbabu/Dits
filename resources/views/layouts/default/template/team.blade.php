@include('layouts.default.header')








    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area" style="background-image: url('{{ asset('uploads/images/banner/'.$breadcum->image)}}');">
        <div class="banner_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h1 class="breadcrumb-title text-color-primary">Our Team</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Our Team</li>
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
            <div class="bg-white">
           

                <!-- ============ Team Member Wrapper Start =============== -->
                <div class="team-member-wrapper section-space--pt_100 section-space--pb_30 bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title section-space--mb_60 text-center">
                                    <h3 class="heading">We pride ourselves on having a team <br> of <span class="text-color-primary">highly-skilled</span> experts</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row ht-team-member-style-two">
                            @if ($members)
                            @foreach ($members as $data)
                            <div class="col-lg-3 col-md-3 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img class="img-fluid" src="uploads/images/team/{{$data->image }}" alt="">
                                            <div class="social-networks">
                                                <div class="inner">
                                                    <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                    </a>
                                                    <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-info text-center">
                                            <h5 class="name">{{$data->name }} </h5>
                                            <div class="position">{{$data->position }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                     

                    </div>
                </div>
                <!-- ============ Team Member Wrapper End =============== -->


            </div>
        </div>








    



    </div>


    <div class="footer-area-wrapper bg-gray foote_padding">
        <div class="footer-area section-space--ptb_80">
            
        </div>
        <div class="footer-copyright-area section-space--pb_30">
            
        </div>
    </div>




<script>
$(document).on('click', '.btn_site', function(){
    var id = $(this).attr('data-id');
    $.ajax({
           type:'POST',
           url:'{{url("user-details")}}',
           data:{_token: "{{ csrf_token() }}", id:id},
           success:function(response){
              $('.modal_content').html(response);
             $(this).parent('.wpo-team-content').find('.wpo-team-text-sub').css({"margin-bottom":"0"});
           }
        });
});
</script>
@include('layouts.default.footer')
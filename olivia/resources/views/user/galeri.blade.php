@extends('user.layout.master')
@section('title')
<title>Galeri</title>
@endsection
@section('content')
{{-- <div class="olv-breadcumb-area" style="background-image: url({{ asset('assets/user/img/core-img/b.png') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">poto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="section-title  portflio-section-title bg-blog-section padd-title">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="text-center">
                        <h2 class="title-h2">Gallery</h2>

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Galeri</a></li>

                        </ol>
                    </div>
                </div>


            </div>

        </div>
  </div>
    <section class="pd-tp-100 pd-bt-60 text-about-p">
        <div class="container blog-content">

            <div class="row">
                <div class="col-md-12">
                      <div class="row">
                        @foreach ($data as $foto)
                        <?php { ?>
                                  <div class=" col-lg-4 col-md-4">
                                     <div class="project_product">
                                        <div class="project-holder">
                                           <img src="{{ asset('assets/image/galeri/foto')}}/{{$foto->foto}}" class="img-responsive" alt="" title="">
                                           <div class="text-holder">
                                              <div class="text-holder-outer">
                                                 <div class="text-holder-inner">
                                                    <h4>{{$foto->nama}}</h4>
                                                    <div class="icon-holder">
                                                       <a href="{{ asset('assets/image/galeri/foto')}}/{{$foto->foto}}" class="modal-venobox project-link vbox-item"> 
                                                       <i class="fas fa-eye"></i>
                                                       </a>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                </div>     
                                <?php } ?>
                @endforeach
                      </div>
              </div>
            </div>
        </div>
      </section>
@endsection
@section('js-user')
<!-- <script>
    $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    loadFOTO();
    function loadFOTO()
    {
        $.ajax({
            type: 'GET',
            url: '/galeri/show/',
            success: function(data) {
                if(data.success == true) {
                //user_jobs div defined on page
                $('#foto-view').html(data.html);
                } else {
                    console.log(data.html)
                }
            }
        });
    }

    });
</script> -->
@endsection
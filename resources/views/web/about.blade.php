@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang Kami</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about pt-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-content h-100">
                    {{-- <h4 class="text-primary">About Fitness Center</h4> --}}
                    <h1 class="display-4 text-white mb-4">We are the best at fulfilling your potential and achieving
                        your goals.</h1>
                    <p class="mb-4">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque
                        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                        nec, pellentesque eu,
                        pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                        nec, vulputate eget, arcu.
                        In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                        mollis pretium. Integer
                        tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                        leo ligula, porttitor
                        eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                        tellus. Phasellus
                        viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi
                        vel augue. Curabitur
                        ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                        condimentum rhoncus, sem quam
                        semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id,
                        lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                        faucibus. Nullam quis ante.
                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                        Donec sodales sagittis
                        magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                        ultricies nec, pellentesque
                        eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                        nec, vulputate eget,
                        arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu
                        pede mollis pretium.
                        Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                        tellus. Aenean leo ligula,
                        porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
                        feugiat a, tellus.
                        Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam
                        ultricies nisi vel augue.
                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                        condimentum rhoncus, sem
                        quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id,
                        lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                        faucibus. Nullam quis ante.
                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                        Donec sodales sagittis
                        magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi
                        a libero. Fusce
                        vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.
                        Nullam accumsan lorem
                        in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in
                        faucibus orci luctus et
                        ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et
                        arcu. Duis arcu tortor,
                        suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer
                        ante arcu, accumsan a,
                        consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum
                        nunc. Nunc nonummy metus.
                        Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum.
                        Nullam nulla eros,
                        ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit
                        risus. Phasellus nec sem in
                        justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo
                        dolor, tempus non, auctor
                        et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere
                        imperdiet, leo. Maecenas
                        malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere
                        vulputate arcu. Phasellus
                        accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia Curae; Sed
                        aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci.
                        Phasellus consectetuer
                        vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum
                        fringilla pede sit amet
                        augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus
                        feugiat, nunc augue blandit
                        nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a,
                        suscipit non, turpis.
                        Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh,
                        nec pellentesque velit
                        pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        Curae; Fusce id purus.
                        Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut
                        neque. Pellentesque
                        habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna,
                        posuere eget, vestibulum
                        et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque
                        nec urna. Proin sapien
                        ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant
                        morbi tristique senectus
                        et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat.
                        Vivamus quis mi. Phasellus a
                        est. Phasellus magna. In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare
                        lobortis. Curabitur a felis
                        in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi.
                        Nullam vel sem. Pellentesque
                        libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis.
                        Nunc egestas, augue at
                        pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Donec interdum,
                        metus et hendrerit
                        aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus
                        nisl, viverra et, tempor
                        et, pretium in, sapien. Donec venenatis vulputate lorem. Morbi nec metus. Phasellus blandit leo
                        ut odio. Maecenas
                        ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et
                        lorem. Sed magna purus,
                        fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus,
                        condimentum nec, tempor a,
                        commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. Nullam cursus
                        lacinia erat. Praesent
                        blandit laoreet nibh. Fusce convallis metus id felis luctus adipiscing. Pellentesque egestas,
                        neque sit amet convallis
                        pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque id mi. Ut tincidunt
                        tincidunt erat. Etiam
                        feugiat lorem non metus. Vestibulum dapibus nunc ac augue. Curabitur vestibulum aliquam leo.
                        Praesent egestas neque eu
                        enim. In hac habitasse platea dictumst. Fusce a quam. Etiam ut purus mattis mauris sodales
                        aliquam. Curabitur nisi.
                        Quisque malesuada placerat nisl. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel,
                        lacus. Sed augue ipsum,
                        egestas nec, vestibulum et, malesuada adipiscing, dui. Vestibulum facilisis, purus nec pulvinar
                        iaculis, ligula mi
                        congue nunc, vitae euismod ligula urna in dolor. Mauris sollicitudin fermentum libero. Praesent
                        nonummy mi in odio. Nunc
                        interdum lacus sit amet orci. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida
                        nisl, id fringilla neque
                        ante vel mi. Morbi mollis tellus ac sapien. Phasellus volutpat, metus eget egestas mollis, lacus
                        lacus blandit dui, id
                        egestas quam mauris ut lacus. Fusce vel dui. Sed in libero ut nibh placerat accumsan. Proin
                        faucibus arcu quis ante. In
                        consectetuer turpis ut velit. Nulla sit amet est. Praesent metus tellus, elementum eu, semper a,
                        adipiscing nec, purus.
                        Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Suspendisse feugiat. Suspendisse
                        enim turpis, dictum sed,
                        iaculis a, condimentum nec, nisi. Praesent nec nisl a purus blandit viverra. Praesent ac massa
                        at ligula laoreet
                        iaculis. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Mauris turpis
                        nunc, blandit et, volutpat
                        molestie, porta ut, ligula. Fusce pharetra convallis urna. Quisque ut nisi. Donec mi odio,
                        faucibus at, scelerisque
                        quis, convallis in, nisi. Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a
                        nisl id ante tempus
                        hendrerit. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida
                        augue augue mollis justo.
                        Suspendisse eu ligula. Nulla facilisi. Donec id justo. Praesent porttitor, nulla vitae posuere
                        iaculis, arcu nisl
                        dignissim dolor, a pretium mi sem ut ipsum. Curabitur suscipit suscipit tellus. Praesent
                        vestibulum dapibus nibh. Etiam
                        iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis. Etiam sollicitudin, ipsum eu
                        pulvinar rutrum, tellus
                        ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Proin magna. Duis vel nibh at
                        velit scelerisque suscipit.
                        Curabitur turpis. Vestibulum suscipit nulla quis orci. Fusce ac felis sit amet ligula pharetra
                        condimentum. Maecenas
                        egestas arcu quis ligula mattis placerat. Duis lobortis massa imperdiet quam. Suspendisse
                        potenti. Pellentesque commodo
                        eros a enim. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Sed
                        libero. Aliquam erat
                        volutpat. Etiam vitae tortor. Morbi vestibulum volutpat enim. Aliquam eu nunc. Nunc sed turpis.
                        Sed mollis, eros et
                        ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Nulla porta
                        dolor. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Pellentesque dapibus
                        hendrerit tortor. Praesent
                        egestas tristique nibh. Sed a libero. Cras varius. Donec vitae orci sed dolor rutrum auctor.
                        Fusce egestas elit eget
                        lorem. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Nam at tortor
                        in tellus interdum
                        sagittis. Aliquam lobortis. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla.
                        Curabitur blandit mollis
                        lacus. Nam adipiscing. Vestibulum eu odio. Vivamus laoreet. Nullam tincidunt adipiscing enim.
                        Phasellus tempus. Proin
                        viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris
                        ac eros. Fusce neque.
                        Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis
                        lacus elit id tortor.
                        Vivamus aliquet elit ac nisl. Fusce fermentum odio nec arcu. Vivamus euismod mauris. In ut quam
                        vitae odio lacinia
                        tincidunt. Praesent ut ligula non mi varius sagittis. Cras sagittis. Praesent ac sem eget est
                        egestas volutpat. Vivamus
                        consectetuer hendrerit lacus. Cras non dolor. Vivamus in erat ut urna cursus vestibulum. Fusce
                        commodo aliquam arcu. Nam
                        commodo suscipit quam. Quisque id odio. Praesent venenatis metus at tortor pulvinar varius.</p>
                    <div class="tab-class pb-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 active" data-bs-toggle="pill" href="#tab-1">
                                    <span style="width: 150px;">Misi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#tab-2">
                                    <span style="width: 150px;">Visi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2" data-bs-toggle="pill" href="#tab-3">
                                    <span style="width: 150px;">Sejarah</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. It has
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. It has
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. It has
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="about-img-inner d-flex">
                        <img src="/assets/img/about-2.png" class="img-fluid" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Explore Fitness Start -->
<div class="container-fluid explore py-5 wow zoomIn" data-wow-delay="0.2s">
    <div class="container py-5 text-center">
        <h1 class="display-1 text-white mb-0"> Explore Fitness Center</h1>
        <a class="btn btn-primary py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/embed/DWRcNpR6Kdc"><i
                class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
    </div>
</div>
<!-- Explore Fitness End -->

<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Trainer</h4>
            <h1 class="display-4 mb-4">Meet Our Amazing Team</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row gy-5 gy-lg-4 gx-4">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Trainer Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Trainer Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Trainer Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Trainer Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
@extends('layouts.app')

@section('content')

<section class="blog-hero-section set-bg pb-5" data-setbg="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bh-text">
                    <h2>Titre du cours</h2>
                    <ul>
                        <li><span>Par <strong>Nom du formateur</strong></span></li>
                        <li>20/03/2020</li>
                        <li>Mis à jour le 22/03/2020</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="bd-text">
                    <div class="bd-title text-center">
                        <h3>Titre du cours</h3>
                        <div class="bd-tag-share">
                            <div class="tag d-flex justify-content-center">
                                <a href="#">Catégorie</a>
                            </div>
                        </div>
                        <h4 class="my-5">Sous-titre du cours</h4>
                    </div>
                    <div class="bd-more-text">
                        <p>Cours description</p>
                    </div>
                    <div class="bd-more-pic">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                    <div class="price-item top-rated">
                                        <div class="tr-tag">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="pi-price mt-5">
                                            <h2><span>€</span>19,99</h2>
                                        </div>
                                        <a href="#" class="price-btn">M'inscrire <i class="fas fa-arrow-right"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>


<section class="related-post-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Ces cours peuvent vous intéresser</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="blog-item set-bg" data-setbg="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg">
                    <div class="bi-tag bg-gradient">Catégorie</div>
                    <div class="bi-text">
                        <h5><a href="#">Titre du cours</a></h5>
                        <span><i class="fa fa-clock-o"></i> 20/03/2020</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-item set-bg" data-setbg="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg">
                    <div class="bi-tag bg-gradient">Catégorie</div>
                    <div class="bi-text">
                        <h5><a href="#">Titre du cours</a></h5>
                        <span><i class="fa fa-clock-o"></i> 20/03/2020</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-item set-bg" data-setbg="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg">
                    <div class="bi-tag bg-gradient">Catégorie</div>
                    <div class="bi-text">
                        <h5><a href="#">Titre du cours</a></h5>
                        <span><i class="fa fa-clock-o"></i> 20/03/2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
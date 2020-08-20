@extends('layouts.app')

@section('content')

<section class="related-post-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Cours</h2>
                    <p class="mt-3">Dès maintenant, créez votre prochain cours en quelques clics !</p>
                    <a href="{{ route('instructor.create') }}" class="primary-btn mt-3">
                        <i class="fas fa-plus"></i>
                        Nouveau cours
                    </a>
                </div>
            </div>
        </div>
        @if(count(\Illuminate\Support\Facades\Auth::user()->courses) > 0)
            @foreach(\Illuminate\Support\Facades\Auth::user()->courses as $course)
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="bi-text">
                                <h5><a class="btn font-weight-bold" href="#">{{ $course->title }}</a></h5>
                                <span><i class="fa fa-clock-o"></i>{{ $course->created_at }}</span>
                            </div>
                        </div>
                        <div class="blog-item set-bg" data-setbg="/storage/courses/{{ $course->user_id }}/{{$course->image}}">
                        </div>
                        <div class="btn-actions d-flex justify-content-center">
                            <a href="{{route('instructor.edit',$course->id)}}" class="primary-btn">
                                <i class="fas fa-edit"></i>
                                Modifier
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>

@endsection

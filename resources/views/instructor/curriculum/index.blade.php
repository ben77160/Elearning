@extends('layouts.instructor-app')

@section('content')

 <section class="schedule-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Programme</h2>
                    <p>{{ $course->title }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="schedule-tab">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            @if(count($course->sections) > 0)
                                <div class="text-center mb-5">
                                    <a class="primary-btn" href="{{ route('instructor.curriculum.create', $course->id) }}">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter une section
                                    </a>
                                </div>
                            @foreach($course->sections as $section)
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 px3 py-3">
                                              <video width="300" height="180" controls>
                                                  <source src="{{ asset("storage/courses_sections/$course->user_id/$section->video") }}" type="video/mp4">
                                              </video>
                                            </div>
                                            <div class="col-lg-4 text-left">
                                                <div class="sc-text">
                                                    <h4>{{ $section->name }}</h4>
                                                </div>
                                                <p>Durée de la section : {{ $section->playtime_seconds }}</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="sc-text d-flex justify-content-around">
                                                    <a class="btn btn-danger" href="#">
                                                        <i class="fas fa-trash"></i>
                                                        Supprimer
                                                    </a>
                                                    <a class="btn btn-warning" href="{{ route('instructor.curriculum.edit', [
    'id' => $course->id,
    'section' => $section->id
]) }}">
                                                        <i class="fas fa-edit"></i>
                                                        Modifier
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <div class="text-center">
                               <a href="{{ route('instructor.curriculum.create', $course->id) }}" class="primary-btn"><i class="fa fa-plus"></i>Ajouter ma première section</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

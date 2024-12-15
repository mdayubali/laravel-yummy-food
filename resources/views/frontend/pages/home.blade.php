@extends('frontend.app')
@section('title','Homepage')

@section('content')
    @include('frontend.partials.hero')
    @include('frontend.partials.products')
    @include('frontend.partials.feature')
    @include('frontend.partials.category')
    @include('frontend.partials.social-products')
    @include('frontend.partials.testimonial')
    @include('frontend.partials.services-contact')

@endsection

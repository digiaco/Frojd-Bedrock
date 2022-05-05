@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
    {% raw -%}  {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!} {% endraw -%}
    </x-alert>

    {% raw -%} {!! get_search_form(false) !!} {% endraw -%}
  @endif
@endsection

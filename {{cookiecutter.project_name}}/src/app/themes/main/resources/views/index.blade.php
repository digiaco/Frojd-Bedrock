@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
    {% raw -%}  {!! __('Sorry, no results were found.', 'sage') !!} {% endraw -%}
    </x-alert>

    {% raw -%} {!! get_search_form(false) !!} {% endraw -%}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {% raw -%} {!! get_the_posts_navigation() !!} {% endraw -%}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection

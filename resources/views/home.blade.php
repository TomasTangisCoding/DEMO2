@extends('layouts.app')


@section('content')

<x-home-title for="Home" :value="__('Home')" class="pb">
HOME   
</x-home-title>



@endsection

@section('inline_js')
    @parent
@endsection
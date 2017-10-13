@extends('layouts.app')
@section('content')
    @if ($agent->isMobile())
        <M-Index></M-Index>
        @else
        <Index></Index>
    @endif
@endsection
@extends('layouts.app')

@section('title', 'test')

@section('content')

<style>
        canvas {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
       #rippleCanvas{
background-image: url('images/water-surface.jpg');
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  min-height: 600px;
  padding-top: 50px;
  width: 100%;
}
    </style>

<canvas id="rippleCanvas"></canvas>

<script>
$("canvas").ripples();
</script>
<script src="
https://cdn.jsdelivr.net/npm/jquery.ripples@0.6.3/dist/jquery.ripples.min.js
"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Ripples -->
<script src="https://cdn.jsdelivr.net/npm/jquery.ripples@0.6.3/dist/jquery.ripples.min.js"></script>

@endsection
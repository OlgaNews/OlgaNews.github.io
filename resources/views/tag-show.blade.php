@extends('layouts.site')
@section('content')
<div id="content">

<div id="left">
    
    <h1>Тег: {{$tags}}</h1>
@foreach($articles as $article)
<p>
<img width="300" aria-hidden="true" alt="" style="top: 0px" src=" {{$article->img}}"/hqdefault.jpg" height="210" align="left" 
  vspace="5" hspace="5">
<h3><a href="{{ route('articleShow',['cat'=>$categories->find($article->cat)->alias,'id'=>$article->alias]) }}"> {{$article->title}}</a></h3>
<font size="4" color="black" face="Arial">{!!$article->des!!}</font>
<a class="btn btn-default" href="{{ route('articleShow',['cat'=>$categories->find($article->cat)->alias,'id'=>$article->alias]) }}" role="button">Подробнее &raquo;</a></p>
@endforeach

</div> <!-- close left -->

<div id="right">

{!!$m2!!}
</div> <!-- close right -->

<div class="spacer"></div>

</div> <!-- close content -->
@endsection


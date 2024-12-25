@extends('_layouts.main')

@section('header')
<div class="text-white flex justify-center mt-10 border-2 text-3xl p-2 w-[500px] font-bold mx-auto">
    <h1 class="font-mono">Welcome to my site</h1>
</div>
@endsection
@section('body')
<div class="text-white flex justify-center mt-10 border-2 p-2 items-center w-[300px] mx-auto">
    <h2 class="font-mono">i want to test this out</h2>
</div>
@endsection

@section('text')
<div class="grid grid-cols-2 mt-10 px-10">
    @for ($i = 0; $i < 6; $i++)
    <h2 class="font-mono text-white border-2 p-2 mt-3 ml-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam cum ducimus autem atque quas, optio recusandae. Rerum laboriosam ipsa, quisquam esse architecto mollitia placeat quibusdam repudiandae tempore? Repellat, neque. Animi?
    </h2>
    @endfor
</div>
@endsection
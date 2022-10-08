@extends('layouts.base')
@section('content')
    <div class="bg-gray-50 h-full " style="margin-bottom: 10px; ">
        
        <div class="px-4" style="padding-top: 60px">

            <h2 class="text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">Новый пост</h2>
            <div class="bg-white shadow-sm mt-5 px-3 p-6">

                <form action="post" method="POST" class="mb-0">
                    @csrf
                    <label for="title" class="block text-sm font-medium text-gray-700">Заголовок</label>
                        <input type="text" name="title"
                            class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm" autofocus>
                    </label>
                    <label for="text" class="mt-6 block text-sm font-medium text-gray-700" >Text</label>
                    <textarea name="text" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm"></textarea>
                </form>

            </div>
        </div>
    </div>
@endsection

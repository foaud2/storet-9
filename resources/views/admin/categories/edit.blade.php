@extends('layouts.admin')

@section('content')
    <div class="py-2">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم الصنف</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>

            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection


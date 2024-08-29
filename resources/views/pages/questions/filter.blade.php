@extends('front.layouts.app')

@section('title', 'Soru Filtreleme')

@section('content')
<div class="container">
    <h1 class="mb-4">Soru Filtreleme</h1>

    <form id="filterForm">
        <div class="form-group">
            <label for="category">Kategori</label>
            <select id="category" name="category_id" class="form-control">
                <option value="">Kategori Seç</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="main">Ana Kategori</label>
            <select id="main" name="main_id" class="form-control">
                <option value="">Ana Kategori Seç</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exam">Sınav</label>
            <select id="exam" name="exam_id" class="form-control">
                <option value="">Sınav Seç</option>
            </select>
        </div>

        <div class="form-group">
            <label for="field">Alan</label>
            <select id="field" name="field_id" class="form-control">
                <option value="">Alan Seç</option>
            </select>
        </div>

        <div class="form-group">
            <label for="lesson">Ders</label>
            <select id="lesson" name="lesson_id" class="form-control">
                <option value="">Ders Seç</option>
            </select>
        </div>

        <div class="form-group">
            <label for="subject">Konu</label>
            <select id="subject" name="subject_id" class="form-control">
                <option value="">Konu Seç</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Filtrele</button>
    </form>
</div>
@endsection

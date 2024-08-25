<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleService
{
    public function handleArticleAttributes($validated, $fileName = null)
    {
        return [
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'meta_author' => $validated['meta_author'],
            'meta_keywords' => $validated['meta_keywords'],
            'image_table' => $fileName ?? null,
            'main_id' => $validated['main_id'],
            'exam_id' => $validated['exam_id'],
            'field_id' => $validated['field_id'],
            'lesson_id' => $validated['lesson_id'],
            'content1' => $validated['content1'],
            'content2' => $validated['content2'],
            'published_at' => $validated['published_at'] ?? null,
            'status' => $validated['status'],
        ];
    }

    public function uploadFile($file)
    {
        $fileName = $file->getClientOriginalName() . '_' . Str::random(10);
        $file->storeAs('public/articles', $fileName);
        return $fileName;
    }
    public function getValidationRules()
    {
        return [
            'title' => 'required|string|max:255',
            'meta_author' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string|max:255',
            'main_id' => 'nullable|exists:mains,id',
            'exam_id' => 'nullable|exists:exams,id',
            'field_id' => 'nullable|exists:fields,id',
            'lesson_id' => 'nullable|exists:lessons,id',
            'content1' => 'required|string',
            'content2' => 'required|string',
            'status' => 'required|string|max:255',
            'file_path' => 'nullable|file|mimes:jpg,png,jpeg,pdf|max:2048',
            'published_at' => 'nullable|date',
        ];
    }
}
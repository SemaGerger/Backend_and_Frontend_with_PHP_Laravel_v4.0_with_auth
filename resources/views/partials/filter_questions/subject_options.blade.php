@foreach ($lessons as $lesson)
    <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
@endforeach

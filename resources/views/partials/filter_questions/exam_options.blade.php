@foreach ($exams as $exam)
    <option value="{{ $exam->id }}">{{ $exam->name }}</option>
@endforeach

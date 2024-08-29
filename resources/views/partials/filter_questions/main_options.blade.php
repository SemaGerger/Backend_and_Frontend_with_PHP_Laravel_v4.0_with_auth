@foreach ($mains as $main)
    <option value="{{ $main->id }}">{{ $main->name }}</option>
@endforeach

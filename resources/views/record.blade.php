@extends('template');

@section('container')
    {{-- <h1>Halaman Artikel Berita</h1> --}}
    <h1> {{ $title }}</h1>
    {{-- <h5>Editor: {{ $name }} | {{ $email }}</h5> --}}
    <hr/>
    @foreach ($records as $record)
        <article class="mb-5 border-bottom pb-3">
            <h3>
                <a href="/record/{{ $record->slug }}">
                    {{ $record->patient->name }}
                </a>
            </h3>
            <h6>Patient:
                <a href="/patient/{{ $record->patient->name }}" class="text-decoration-none">
                    {{ $record->patient->name }}
                </a>
            </h6>
            <h6>Dokter:
                <a href="/doctor/{{ $record->doctor->name }}"
                    class="text-decoration-none">{{ $record->doctor->name }}</a>
            </h6>
            {{-- <h6>By:
                <a href="/authors/{{ $article->author->username }}" class="text-decoration-none">
                    {{ $article->author->name }}
                </a>
            </h6> --}}
            {{-- <p>{{ $article->excerpt }}</p>

            <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                Read More
            </a> --}}
        </article>
    @endforeach
@endsection

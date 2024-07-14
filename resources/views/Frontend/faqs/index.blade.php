@extends('Frontend.layouts.layout')

@section('title', 'home')

@section('content')

<div id="faqs" class="accordion" id="accordionPanelsStayOpenExample">
    @foreach ($faqs as $key => $item)
        <div class="accordion-item" style="background: black">
            <h2 class="accordion-header w-100" id="heading{{ $key }}">
                <button style="width: 100% !important"
                    class="accordion-button{{ $loop->first ? '' : ' collapsed' }} text-white" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}"
                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                    aria-controls="collapse{{ $key }}">
                    {{ $loop->iteration }} . {{ $item['questions'] }}
                </button>

            </h2>
            <div id="collapse{{ $key }}"
                class="accordion-collapse collapse{{ $loop->first ? ' show' : '' }}"
                aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionPanelsStayOpenExample">
                <div class="accordion-body text-white">
                    {{ $item['answer'] }}
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>

@endsection
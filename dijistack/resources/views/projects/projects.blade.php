@extends('partials.master')
@section('main')
    <main class="o-hidden blur-menubg">
        <div class="inter-links-center d-flex align-items-center">
            <div class="container">
                <div class="links-text">
                    <ul class="rest">
                        @foreach ($projects as $index => $project)
                            <li data-tab="tab-{{ $index + 1 }}">
                                <h2>
                                    <span class="num">{{ sprintf('%02d', $index + 1) }}.</span>
                                    <a href="{{ url('/projelerimiz/' . $project->slug) }}">
                                        <span class="tag">{{ $project->category }}</span>
                                        <span class="text">{{ $project->title }}</span>
                                    </a>
                                </h2>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="links-img">
                @foreach ($projects as $index => $project)
                    <div class="img {{ $index == 0 ? 'current' : '' }}" id="tab-{{ $index + 1 }}"
                        style="width: 100% !important; height: 100% !important; display: flex !important; justify-content: center !important; align-items: center !important; overflow: hidden !important;">
                        <img src="{{ asset('assets/imgs/' . $project->hero_image) }}" alt="{{ $project->title }}"
                            style="width: 100% !important; height: 100% !important; object-fit: cover !important;">

                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

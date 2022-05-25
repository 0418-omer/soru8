<x-app-layout>
    <x-slot name="header">Anasayfa</x-slot>

    <div class="row">
        <div class="@if(count($results)>0) col-md-8 @else col-md-12 @endif">
            @if(count($quizzes)>0)
            <div class="list-group">
                @foreach($quizzes as $quiz)
                <a href="{{ route('quiz.detail',$quiz->slug)}} "
                    class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$quiz->title}}</h5>
                        <small>{{$quiz->finished_at ? $quiz->finished_at->diffForHumans().' bitiyor.' : null }}</small>
                    </div>
                    <p class="mb-1">{{ Str::limit($quiz->description,100) }}</p>
                    <small>{{$quiz->questions_count}} Soru </small>
                </a>
                @endforeach
                <div class="mt-2">
                    {{ $quizzes->links() }}
                </div>
            </div>
            @else
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4"><i class="fa fa-exclamation-triangle"></i> Quiz Bulunamadı</h1>
                    <p class="lead">Daha sonra tekrar göz atabilirsiniz.</p>
                </div>
            </div>
            @endif
        </div>
        @if(count($results)>0)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Quiz Sonuçları
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($results as $result)
                    <li class="list-group-item">
                        <strong>{{$result->point}}</strong> -
                        <a href="{{route('quiz.detail',$result->quiz->slug)}}">
                            {{$result->quiz->title}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>

</x-app-layout>

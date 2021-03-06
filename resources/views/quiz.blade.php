<x-app-layout>
    <x-slot name="header">{{$quiz->title}}</x-slot>
    <div class="card">
        <div class="card-body">
                <form method="POST" action="{{route('quiz.result',$quiz->slug)}} ">
                    @csrf
                @foreach($quiz->questions as $question)

                <strong>#{{$loop->iteration}} </strong> {{$question->question}}
                @if($question->image)
                    <img src="{{asset($question->image)}}" style="width: 50%" class="img-responsive">
                @endif
                <div class="form-check mt-2">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}1"
                        value="option1" required>
                    <label class="form-check-label" for="quiz{{$question->id}}1">
                        {{$question->option1}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}2"
                        value="option2" required>
                    <label class="form-check-label" for="quiz{{$question->id}}2">
                        {{$question->option2}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}3"
                        value="option3" required>
                    <label class="form-check-label" for="quiz{{$question->id}}3">
                        {{$question->option3}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{$question->id}}" id="quiz{{$question->id}}4"
                        value="option4" required>
                    <label class="form-check-label" for="quiz{{$question->id}}4">
                        {{$question->option4}}
                    </label>
                </div>
                    <hr>
                @endforeach

                <button type="submit" class="btn btn-success btn-sm btn-block">S??nav?? Bitir</button>

                </form>
        </div>
    </div>
</x-app-layout>

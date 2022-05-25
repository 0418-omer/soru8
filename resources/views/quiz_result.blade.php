<x-app-layout>
    <x-slot name="header">{{$quiz->title}} Sonucu</x-slot>
    <div class="card">
        <div class="card-body">

            <h3>Puan : <strong>{{$quiz->my_result->point}}</strong></h3>
            <div class="alert bg-light">
                <i class="fa fa-square"></i> İşaretlediğin Şık<br>
                <i class="fa fa-check text-success"></i> Doğru Cevap<br>
                <i class="fa fa-times text-danger"></i> Yanlış Cevap
            </div>



                @foreach($quiz->questions as $question)


                @if($question->correct_option == $question->my_option->option)
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-times text-danger"></i>
                @endif
                <strong>#{{$loop->iteration}} </strong>

                {{$question->question}}
                @if($question->image)
                    <img src="{{asset($question->image)}}" style="width: 50%" class="img-responsive">
                @endif
                            <br>

                <small>Bu soruya <strong>%{{$question->true_percent}}</strong> oranında doğru cevap verildi.</small>

                <div class="form-check mt-2">
                    @if('option1' == $question->correct_option)
                        <i class="fa fa-check text-success"></i>
                    @elseif ('option1'==$question->my_option->option)
                        <i class="fa fa-square"></i>
                    @endif
                    <label class="form-check-label" for="quiz{{$question->id}}1">
                        {{$question->option1}}
                    </label>
                </div>
                <div class="form-check">
                    @if('option2' == $question->correct_option)
                        <i class="fa fa-check text-success"></i>
                    @elseif ('option2'==$question->my_option->option)
                        <i class="fa fa-square"></i>
                    @endif
                    <label class="form-check-label" for="quiz{{$question->id}}2">
                        {{$question->optionr2}}
                    </label>
                </div>
                <div class="form-check">
                    @if('option3' == $question->correct_option)
                        <i class="fa fa-check text-success"></i>
                    @elseif ('option3'==$question->my_option->option)
                        <i class="fa fa-square"></i>
                    @endif
                    <label class="form-check-label" for="quiz{{$question->id}}3">
                        {{$question->option3}}
                    </label>
                </div>
                <div class="form-check">
                    @if('option4' == $question->correct_option)
                        <i class="fa fa-check text-success"></i>
                    @elseif ('option4'==$question->my_option->option)
                        <i class="fa fa-square"></i>
                    @endif
                    <label class="form-check-label" for="quiz{{$question->id}}4">
                        {{$question->option4}}
                    </label>
                </div>
                @if(!$loop->last)
                    <hr>
                @endif
                @endforeach

        </div>
    </div>
</x-app-layout>

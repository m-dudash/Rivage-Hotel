@extends("layouts.app")
@section('content')
<br><br><br>

<div class="mpic" id="reservation">
    <h1 style="font-size: 1.2em"><b>FAQ </b></h1>
</div>
<br /><br><br>
<!-- Код для вывода вопросов и ответов -->
<div class="accordion" id="accordionExample">
    @foreach($faq as $item)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{$item->id}}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$item->id}}" aria-expanded="false" aria-controls="collapse{{$item->id}}">
                    {{$item->question}}
                </button>
                <!-- Кнопки Edit и Delete -->

                @if(auth()->check() && auth()->user()->role == 'admin')
                    <div class="btn-group" role="group">

                        <button type="submit" style="background-color: white; color: #500505;margin-right: 20px; margin-left: 20px; margin-bottom: 5px" >
                            <a href="{{route('faq.edit', $item)}}" >Edit</a>
                        </button>


                        <form action="{{route('faq.delete', $item)}}" id="del" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="margin-right: 20px; margin-left: 20px; margin-bottom: 5px;  color: aliceblue">Delete</button>
                        </form>
                    </div>
                @endif


            </h2>
            <div id="collapse{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$item->id}}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{$item->answer}}
                </div>
            </div>
        </div>

    @endforeach




</div>
@if(auth()->check() &&  auth()->user()->role == 'admin')
    <!-- Форма для новых вопросов -->

    <br><br><br>
    <div class="otazky">
        <form action="{{route('faq.store')}}" id="otazky" method="post">
            @csrf
            <br>
            <div>
                <label for="question">NEW QUESTION:</label>
                <input class="inp" type="text" id="question" name="question" required />
                <br /><br />
                <label for="answer">NEW ANSWER:</label>
                <input class="inp" type="text" id="answer" name="answer" required />
                <br /><br />
                <button type="submit">POST</button>
            </div>
        </form>
    </div>
    </div>
@endif


<br /><br /><br /><br /><br /><br /><br /><br />
<p class="thm" style="font-size: 200%">Your comfort is our priority</p>
<br /><br /><br /><br /><br /><br /><br /><br />
<style>
    .otazky {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -80px;
    }
    .otazky form {
        margin: 6%;
        padding: 4%;
        padding-top: 3%;

        width: 50%;
        box-shadow: 1px 5px 20px rgba(0, 0, 0, 0.3);
        border-radius: 15px 15px 15px 15px;
    }
    .otazky .thm {
        padding: 10%;
    }
    label {
        font-family: helvetica;
        font-weight: 600;
        font-size: 70%;
    }
    .inp {
        border: 2px solid #ffffff00;
        border-radius: 5px;
        background-color: #f0f0f0;
        height: 2.5em;
        padding: 8px;
        margin-bottom: 10px;
        width: 80%;
        margin-left: 10%;
    }
    input[type="checkbox"] {
        height: 1em;
        width: 1em;
        margin-left: 0%;
    }
    button {
        padding: 8px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #500505;
        color: aliceblue;
        border-radius: 5px;
        border: none;
        font-size: 15px;
        transition: background-color 0.3s ease;
    }
    button:hover {
        background-color: #5f0a0a;
    }
</style>
@endsection()

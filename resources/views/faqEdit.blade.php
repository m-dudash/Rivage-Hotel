@extends('layouts.app')
@section('content')
    <br><br>
    <!-- Форма для редактирования вопроса и ответа -->
    <p class="thm" style="font-size: 180%">Edit Question</p>
    <br>
    <div class="otazky">
        <form action="{{route('faq.update', $item)}}" id="otazky" method="post">
            @csrf
            @method('PUT')
            <br>

            <div>
                <label for="question">UPDATE QUESTION:</label>
                <input class="inp" type="text" id="question" name="question" value="{{$item->question}}" required />
                <br /><br />
                <label for="answer">UPDATE ANSWER:</label>
                <input class="inp" type="text" id="answer" name="answer" value="{{$item->answer}}" required />
                <br /><br />
                <button type="submit">POST</button>
            </div>

        </form>
    </div>
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
@endsection

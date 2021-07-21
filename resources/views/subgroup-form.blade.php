@extends('pmk-admin')

@section('content')
    <div class="mt-2 d-flex justify-content-center">
        <div class="mt-2 w-50">
            <h3>Форма добавления кружков и секций</h3>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form class="" action="/subgroup-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="name" class="mb-2">Название</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Введите заголовок">
                </div>
                <div class="form-group mt-3 mb-2">
                    <label for="text" class="mb-2">Дополнительная информация</label>
                    <textarea class="form-control" name="text" rows="3" id="text" placeholder="Введите текст"></textarea>
                </div>

                <div class="custom-file mt-3 mb-2">
                    <input type="file" name="img" class="form-control-file" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary mt-3 mb-3">Добавить</button>
            </form>
        </div>
    </div>
@endsection

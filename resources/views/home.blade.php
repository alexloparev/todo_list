@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ToDO List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                </div>
                    <div class="container h-100">
                        <div class="row justify-content-between">
                            <!--            search-->
                            <div class="col py-3">
                                <div class="small fw-light">Поиск</div>
                                <div class="input-group">
                                    <input class="form-control border-end-0 border rounded-pill" type="search" value="tag" id="example-search-input">
                                    <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                                </div>
                            </div>
                            <!--            ./search-->
                            <!--            add-->
                            <div class="row col-md-3 align-items-end py-3">
                                <button type="button" onclick="addTodo()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                                    Добавить
                                </button>
                            </div>
                            <!--            ./add-->
                        </div>





                        <!--        tags-->
                        <div class="col-md-9 mx-auto row pb-4">
                            <button type="button" class="btn btn-primary btn-sm col-md-2 mx-auto">тег 1</button>
                        </div>
                        <!--        ./tags-->





                        <!--        todo-->
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Текст</th>
                                <th scope="col" class="col-img">Превью</th>
                                <th scope="col-3" class="col-actions">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                    <span class="text">
                        В целом, конечно, реализация намеченных плановых заданий позволяет оценить значение новых предложений. Значимость этих проблем настолько очевидна, что выбранный нами инновационный путь требует определения и уточнения стандартных подходов. С учётом сложившейся международной обстановки, постоянный количественный рост и сфера нашей активности не оставляет шанса для первоочередных требований.
                    </span>
                                </th>
                                <td>
                                    <a href="" target="_blank">
                                    <img src="https://kirovnet.ru/wp-content/uploads/2019/07/B9C8EEA8-C333-44B2-A82D-92FB2250CE10.jpeg" class="img-thumbnail" alt="preview">
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="w-100 btn btn-outline-danger mb-3" form-data="1" onclick="getTodo()">Удалить</button>
                                    <button type="button" class="w-100 btn btn-secondary">Поделиться</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/jquery-3.6.3.js"></script>
    <script src="/js/jquery-3.6.3.min.js"></script>
    <script src="/js/script.js"></script>
@endsection

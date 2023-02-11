@extends('home')
@section('todo')
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
                    ADD
                </button>
            </div>
<!--            ./add-->
        </div>
<!--        tags-->
        <div class="col-md-9 mx-auto row pb-4">
            <button type="button" class="btn btn-primary btn-sm col-md-2 mx-auto">тег 1</button>
            <button type="button" class="btn btn-primary btn-sm col-md-2 mx-auto">тег 2</button>
            <button type="button" class="btn btn-primary btn-sm col-md-2 mx-auto">тег 3</button>
            <button type="button" class="btn btn-primary btn-sm col-md-2 mx-auto">тег 4</button>
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
                    <img src="https://kirovnet.ru/wp-content/uploads/2019/07/B9C8EEA8-C333-44B2-A82D-92FB2250CE10.jpeg" class="img-thumbnail" alt="preview">
                </td>
                <td>
                    <button type="button" class="w-100 btn btn-outline-danger mb-3" form-data="1">Удалить</button>
                    <button type="button" class="w-100 btn btn-secondary">Поделиться</button>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <span class="text">
                        Мы вынуждены отталкиваться от того, что укрепление и развитие внутренней структуры способствует повышению качества кластеризации усилий. Идейные соображения высшего порядка, а также убеждённость некоторых оппонентов играет важную роль в формировании новых принципов формирования материально-технической и кадровой базы. Приятно, граждане, наблюдать, как независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут ограничены исключительно образом мышления.
                    </span>
                </th>
                <td>
                    <img src="https://kirovnet.ru/wp-content/uploads/2019/07/B9C8EEA8-C333-44B2-A82D-92FB2250CE10.jpeg" class="img-thumbnail" alt="preview">
                </td>
                <td>
                    <button type="button" class="w-100 btn btn-outline-danger mb-3">Удалить</button>
                    <button type="button" class="w-100 btn btn-secondary">Поделиться</button>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <span class="text">
                        Как принято считать, многие известные личности, инициированные исключительно синтетически, призваны к ответу. Вот вам яркий пример современных тенденций — новая модель организационной деятельности в значительной степени обусловливает важность глубокомысленных рассуждений. А также многие известные личности подвергнуты целой серии независимых исследований.
                    </span>
                </th>
                <td>
                    <img src="https://wallbox.ru/resize/320x240/wallpapers/main/201125/40ca36059d262eeadb18ead4083e2418.jpg" class="img-thumbnail" alt="preview">
                </td>
                <td>
                    <button type="button" class="w-100 btn btn-outline-danger mb-3">Удалить</button>
                    <button type="button" class="w-100 btn btn-secondary">Поделиться</button>
                </td>
            </tr>
            </tbody>
        </table>
<!--        ./todo-->
<!--        pagination-->
        <nav aria-label="Another pagination example">
            <ul class="pagination pagination-lg flex-wrap justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Предыдущие</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Следующие</a>
                </li>
            </ul>
        </nav>
<!--        ./pagination-->
    </div>

    <script src="js/fontawesome.js"></script>
    <script src="js/jquery-3.6.3.js"></script>
    <!-- <script src="js/jquery-3.6.3.min.js"></script> -->
    <script src="js/script.js"></script>
@endsection

@extends('layouts.app')

@section('content')
    @auth()
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>
            function token() {
                return axios.get('/api/token').then(response => response.data.access_token)
            }

            token().then((access_token) => {
                console.log(access_token)
                const config = {
                    headers: {Authorization: `Bearer ${access_token}`}
                };
                axios.get('/api/todos', config).then(resp => {
                    console.log(resp.data);
                })
            })


        </script>
    @endauth
    <div class="container">
        <br>
        <strong> Список дел</strong>


        <div style="width:90%;">

            <form>
                <div class="">
                    <div class="col-lg-12">
                        <div id="row">
                            <div class="input-group-prepend align-items-center col-8">

                                <input type="text">
                                <button id="Filter" type="button"
                                        class="btn btn-dark">
						<span class="bi bi-search">
						</span> Найти
                                </button>
                            </div>
                            <div class="input-group m-3">
                                <div class="input-group-prepend align-items-center col-8">
                                    <span id="Todo">Ведите текст заметки</span>

                                </div>
                                <button class="btn btn-warning"
                                        id="Edit" type="button">
                                    <i class="bi bi-pen"></i>

                                </button>
                                &nbsp;
                                <button class="btn btn-info"
                                        id="AddImage" type="button">
                                    <i class="bi bi-image"></i>

                                </button>
                                <input id="fileInput" type="file" hidden="true"/>
                                &nbsp;


                                <button class="btn btn-danger"
                                        id="DeleteRow" type="button">
                                    <i class="bi bi-trash"></i>

                                </button>&nbsp; &nbsp;
                                <div class="form-check form-switch d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="shared">&nbsp;
                                    <label class="form-check-label" for="shared"> Доступ </label>
                                </div>
                            </div>

                        </div>

                        <div id="newinput"></div>
                        <button id="rowAdder" type="button"
                                class="btn btn-dark">
						<span class="bi bi-plus-square-dotted">
						</span> Добавить
                        </button>
                        &nbsp
                        <button id="tagAdder" type="button"
                                class="btn btn-warning">
						<span class="bi bi-plus-square-dotted">
						</span> Добавить тег
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <script type="text/javascript">

            $("#rowAdder").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<div class="input-group-prepend align-items-center col-8">' +
                    '<span id="Todo">Ведите текст заметки</span></div>' +
                    '</button>' +
                    '<button class="btn btn-warning"' +
                    'id="Edit" type="button">\n' +
                    '<i class="bi bi-pen"></i>' +
                    '</button>&nbsp' +
                    '<button class="btn btn-info"' +
                    'id="AddImage" type="button">\n' +
                    '<i class="bi bi-image"></i>' +
                    '</button>' +
                    '&nbsp;' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> </button> ' +
                    '&nbsp; &nbsp;' +
                    '<div class="form-check form-switch d-flex align-items-center" >\n' +
                    '<input class="form-check-input" type="checkbox" id="shared">&nbsp;\n' +
                    '<label class="form-check-label" for="shared">   Доступ  </label>\n' +
                    '</div>' +
                    '</div> </div>';

                $('#newinput').append(newRowAdd);
            });

            $("body").on("click", "#DeleteRow", function () {
                $(this).parents("#row").remove();
            });

            $("body").on("click", "#Todo", function () {
                $(this).attr('contentEditable', true);
            }).blur(
                function () {
                    $(this).attr('contentEditable', false);
                });

            $("body").on("click", "#Edit", function () {
                $("#Todo").attr('contentEditable', true);
            });

            $("body").on("click", "#AddImage", function () {
                console.log("click")
                $('input[type=file]').trigger('click');
            });

        </script>
    </div>
@endsection

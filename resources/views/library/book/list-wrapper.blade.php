@extends('library.layouts.master')

@section('content')
    <!-- book list wrapper start -->

    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Library book list</h4>
                </div>
                <div class="card-body">
                    <div id="book-list_container">

                        @yield('bookslist')

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        $(document).ready(function()
        {
            $(document).on('click', '.pagination a',function(event)
            {
                event.preventDefault();
                var page=$(this).attr('href').split('page=')[1];
                getData(page);
            });
        });

        function getData(page){
            $.ajax(
                {
                    url: '/book?page=' + page ,
                    type: "get",
                    datatype: "html"
                }).done(function(data){
                $("#book-list_container").empty().html(data);
                location.hash = page;
            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
        }

        getData(1);
    </script>
@endpush

@extends('layouts.theme1.master')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-8  col-sm-8 offset-2">
            <div class="card bg-dark text-light text-center">
                <div class="card-body ">
                    <h4 class="card-title text-center text-light ">Total Subscribers: {{ $total_sub }}</h4>
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Join At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subscribers as $subscriber)
                                <tr>
                                    <td>{{ $subscriber->id }}</td>
                                    <td>{{ $subscriber->email }}</td>
                                    <td>{{ $subscriber->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <h6 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-2-box-multiple-outline"></i> Table Without Outside Padding</h6>
                </div>
            </div>
        </div>

    </div>


@endsection
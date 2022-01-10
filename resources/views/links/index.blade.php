@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-6">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Orders Received</h6>
                        <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2>
                        <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-6">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Orders Received</h6>
                        <h2 class="text-right"><i class="fa fa-rocket f-right"></i><span>486</span></h2>
                        <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                    </div>
                </div>
            </div>

            <div class="col-12 card" style="border-radius: 20px">
                <div class="card-body">
                    <h2 class="card-title">Your links</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Url</th>
                                <th scope="col">Visits</th>
                                <th scope="col">Last Visit</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($links as $link)
                                <tr>
                                    <td>{{ $link->name }}</td>
                                    <td><a href="{{ $link->link }}">{{ $link->link }}</a></td>
                                    <td>{{ $link->visits_count }}</td>
                                    <td>{{ $link->latest_visit ? $link->latest_visit->created_at->format('M j Y - H:ia') : 'N/A' }}</td>
                                    <td><a href="/dashboard/links/{{ $link->id }}/edit">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/dashboard/links/create" class="btn btn-primary">Add Link</a>
                </div>
            </div>
        </div>
    </div>
@endsection
